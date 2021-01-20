//Sequelize
    const Sequelize = require('sequelize')

// Config
    // Se conectando ao mySQL
    const sequelize = new Sequelize('care_guide', 'root', '', {
        host: 'localhost',
        dialect: 'mysql' 
    });

//exportando o Sequelize
module.exports = {
    Sequelize: Sequelize,
    sequelize: sequelize
}