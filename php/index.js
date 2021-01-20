const express = require('express');
const app = express();
const handlebars = require('express-handlebars')
const bodyParser = require('body-parser')
const Post = require('./models/Post.js')



//Config
    //Template Engine
        app.engine('handlebars', handlebars({defaultLayout: 'main'}))
        app.set('view engine', 'handlebars')
    // Body Parser
        app.use(bodyParser.urlencoded({extended: false}))
        app.use(bodyParser.json())

//Rotas
    app.get('/', function(req, res){
        Post.findAll({order: [['id', 'DESC']]}).then(function(posts){
            res.render('home',{posts: posts})    
        })
        
    })

    app.get('/cad', function(req, res){
        res.render('formulario')
    })

    app.post('/add', function(req, res){
        Post.create({
            title: req.body.title,
            content: req.body.content
        }).then(function(){
            res.redirect('/')
        }).catch(function(erro){
            res.send("Houve um erro: " + erro)
        })
    })

    app.get('/delete/:id', function(req, res){
        Post.destroy({where: {'id': req.params.id}}).then(function(){
            res.redirect('/')
        }).catch(function(erro){
            res.send("Esta postagem não existe!")
        })
    })

    app.get('/edit/:id', function(req, res){
        Post.findByPk(req.params.id)
          .then(post => {
            res.render(__dirname + '/views/layouts/form-edit', {
              id: req.params.id,
              title: post.title,
              content: post.content
            })
          })
          .catch(err => {
            res.send('Post não encontrado!')
          })
      })
      app.post('/edit/:id', function(req, res){
        Post.update({
          title: req.body.title,
          content: req.body.content
        },
        {
          where: { id: req.params.id }
        }).then(function(){
          res.redirect('/')
        }).catch(function(err){
          console.log(err);
        })
      })

app.listen(3333, function(){
    console.log("Servidor Rodando na url http://localhost:3333");
})