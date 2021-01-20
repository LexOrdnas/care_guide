const db = require('./db')

const Post = db.sequelize.define('instprog', {
    title: {
        type: db.Sequelize.STRING
    },

    content: {
        type: db.Sequelize.TEXT
    }
}, {
    tableName: 'instprog'
 });

//Post.sync({force: true})

module.exports = Post