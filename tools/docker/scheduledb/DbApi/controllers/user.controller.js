const User = require("../models/user.model");
const config = require('../config.json');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');
const Role = require('../_helpers/role');

const secret = config.secret;

module.exports = {
  // Add user
  register: async function (req, res, next) {
    // console.log('user.controller.register: username = ' + req.body.username);
    await User.findOne(({ username: { $eq: req.body.username } }), function (err, usr) {
      if (usr) {
        // console.log('user.controller.register: username: ' + req.body.username + ' found.');
        return res.status(400).json({ message: 'username ' + req.body.username + ' already exists.' });
      }

      const user = new User(req.body);

      // hash password
      if (req.body.password) {
        user.hash = bcrypt.hashSync(req.body.password, 10);
      }

      // save user
      user.save();
      return res.json({ user });
    });
  },

  authenticate: function (req, res, next) {
    // console.log('user.controller.authenticate: username = ' + req.body.username);
    userAuth(req.body)
      .then(user => user ? res.status(200).json(user) : res.status(400).json({ message: 'Username or password is incorrect' }))
      .catch(err => {
        res.status(400).json({ name: 'Error', message: err.message });
      });
  },

  update: async function (req, res, next) {
    // console.log('user.controller.update._Id: ' + req.body._id);
    // console.error('user.controller.update.username: ' + req.body.username);
    await User.findByIdAndUpdate(req.body._id, req.body, { new: true })
      .then(user => {
        if (req.body.password) {
          user.hash = bcrypt.hashSync(req.body.password, 10);
          // save user - only need this save if we are updating the password
          user.save();
        }
        res.json(user)
      })
      .catch(err => {
        // console.log('user.controller.update: err = ' + err);
        next(err);
      });
  },

  findAll: async function (req, res, next) {
    await User.find({}).select('-hash')
      .then(users => res.json(users))
      .catch(err => {
        // console.log('user.controller.update: err = ' + err);
        res.status(404).json({ name: 'Error', message: err.message });
      });
  },

  // because _id is unique we don't have to worry about duplicates
  // returns a list of user id's, fistname and lastname only, sorted on lastname
  // role = Contact is excluded
  listUsers: async function (req, res, next) {
    await User.find({ role: { $ne: 'Contact' } })
      .sort({ lastname: 1 })
      .select({ firstname: 1, lastname: 1, role: 1 })
      .then(users => {
        // Ignore this case for now.
        // if (users === null) {
        //   throw new Error('No users found.');
        // } else {
        res.json(users);
      })
      .catch(err => {
        // next(err);
        res.status(404).json({ name: 'Error', message: err.message });
      });
  },

  // because _id is unique we don't have to worry about duplicates
  // returns a list of user id's, fistname and lastname only, sorted on lastname
  // role === Contact only
  listContacts: async function (req, res, next) {
    await User.find({ role: { $eq: 'Contact' } })
      .sort({ lastname: 1 })
      .select({ firstname: 1, lastname: 1, role: 1 })
      .then(users => res.json(users))
      .catch(err => {
        // console.log('user.controller.update: err = ' + err);
        // next(err);
        res.status(404).json({ name: 'Error', message: err.message });
      });
  },

  getCurrent: async function (req, res, next) {
    // console.log('user.controller.getCurrent _id: ' + req.user.sub);
    let eliminate = req.user.role === 'Admin' ? '-hash' : '-hash -role';
    await User.findById(req.user.sub).select(eliminate)
      .then(user => user ? res.json(user) : res.status(404).json(`Error: ${req.user.sub} Not Found`))
      .catch(err => {
        res.status(404).json({ name: 'Error', message: err.message });
      })
  },

  findOne: async function (req, res, next) {
    // console.log(req.params._id);
    // req.params._id = '5ceeeb11b23b1e4a40d5bd3c';
    await User.findById(req.params._id, function (err, user) {
    })
      .then(user => {
        // a bad or nonexistent key is not considered an error?
        if (user === null) {
          throw new Error('User ' + req.params._id + ' not found.');
        } else {
          res.json(user);
        }
      })
      .catch(err => {
        res.status(404).json({ name: 'Error', message: err.message });
      });

    // await User.findById(req.params._id).select('-hash')
    //   .then(user => user ? res.json(user) : res.status(404).json(`Error: ${req.params._id} Not Found`))
    //   .catch(err => next(err));
  },

  // delete a specific entry by _id
  delete: async function (req, res) {
    await User.findByIdAndDelete(req.params._id)
      .then(user => {
        // if removed, then removed user is returned
        res.status(200).json('' + user._id + ': deleted.');
      })
      .catch(err => {
        res.status(404).json({ name: 'Error', message: "Meeting id: '" + req.params._id + "' Not Found" + ' - ' + err.message });
      });
  }
};

// User services

// verify username/password & create token
async function userAuth({ username, password }) {
  const user = await User.findOne({ username });
  if (user && bcrypt.compareSync(password, user.hash)) {
    const { hash, ...userWithoutHash } = user.toObject();
    // create token
    const token = jwt.sign(
      {
        sub: user.id,
        role: user.role,
        // iat: is automatically set by default to seconds
        // set expiration time to 2 hours after creation time
        exp: Math.floor(Date.now() / 1000) + (2 * 60 * 60), // 2 hr * 60 min * 60 sec = 2 hr in seconds
        // for testing, swap line below with line above
        // exp: Math.floor(Date.now() / 1000) + (60), // test time of 1 minute
      }, config.secret);
    return {
      ...userWithoutHash,
      token
    };
  }
};
