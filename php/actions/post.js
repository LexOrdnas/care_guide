const db = require('./db')

const Post = db.sequelize.define('instprog', {
    title: {
        type: db.Sequelize.STRING
    },
    content:{
        type: db.Sequelize.TEXT
    }
})

module.exports = Post


//testanto a criação da tabela:
//Post.sync({force: true})