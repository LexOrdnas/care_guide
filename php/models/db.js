//Sequelize
    const Sequelize = require('sequelize')

// Config
    // Se conectando ao mySQL
    const sequelize = new Sequelize('care_guide', 'root', '', {
        host: 'localhost',
        dialect: 'mysql' 
        // sql213.epizy.com - server
        // epiz_27132883 - user
        // oHp69wog3MB - password
        // epiz_27132883_care_guide - bd
    });

//exportando o Sequelize
module.exports = {
    Sequelize: Sequelize,
    sequelize: sequelize
}