<!-- Inicio do Cabeçalho -->
<?php 
        //include('includes/header.php');
        session_start();
        require_once 'actions/usuarios.php';
        $u = new Usuario;
    ?>
<!-- Fim do Cabeçalho -->

<!-- Inicio do Espaçador -->
<div class="medium-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Conteúdo Principal -->
<main>

<!-- Inicio da Sessão -->
<section>
        <div class="container pt-5">
            <div class="row py-4">
                <div class="col-md-6 title-cg">
                    <p class="h1 font-weight-bold mb-3 ">Encontre conteúdo relevante sobre o tema !</p>
                    <!--
                    <div class="justify-content-initial">
                        <p class="h5">Encontre depoimentos, palestras, artigos e muito mais de 
                                pessoas que já passaram pelo que desafio de largar as drogas.</p>
                    </div>
                     -->
                </div>

                <!-- Inicio da Imagem da Sessão -->
                <div class="col-md-6 justify-content-center">
                    <img class="w-75 d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block" 
                    src="https://i.ibb.co/BKdhMvp/content.png">
                </div>
                <!-- Fim da Imagem da Sessão -->
                
            </div>
        </div>
    </section>
    <!-- Fim da Sessão -->

  <div class="container mt-5">
		

		<!-- cascading cards -->
		<div class="row">
		
			<div class="col-lg-4">
				<div class="card card-cascade card-cascade-wider mb-5">
					<img 
                        class="card-img-top"
                        src="https://responsivemart.com/wp-content/uploads/img-1.jpg" 
                        alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Artigo Amor Exigente</h5>
					    <p class="card-text">
                            Todos os domingos temos a DomingueirAE, às 18h, horário de Brasília. 
                            No próximo encontro, você conhecerá um pouco mais sobre a maravilhosa equipe 
                            da CasAE, a sede da FEAE.
                        </p>
					    <a href="https://amorexigente.org.br/domingueirae/" class="card-link">
                            Link Direto
                        </a>
					</div>
				</div>
			</div>
            <div class="col-lg-4">
				<div class="card card-cascade card-cascade-wider mb-5">
					<img class="card-img-top" src="https://responsivemart.com/wp-content/uploads/img-2.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">AE NO PROGRAMA VIDA MELHOR</h5>
					    <p class="card-text">
                            Quadro do Amor-Exigente que foi ao ar em 15/02/2021 no programa Vida Melhor, 
                            da Redevida.</p>
					    <a href="https://amorexigente.org.br/ae-no-programa-vida-melhor-redevida-15-02-2021/" class="card-link">Link Direto</a>
					</div>
				</div>
			</div>
            <div class="col-lg-4">
				<div class="card card-cascade card-cascade-wider mb-5">
					<img class="card-img-top" src="https://responsivemart.com/wp-content/uploads/img-3.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">DOMINGUEIRAE – CONSUMO PROBLEMÁTICO DE DROGAS</h5>
					    <p class="card-text">
                            DomingueirAE realizada no dia 14 de fevereiro, com o tema “Consumo problemático
                            de drogas, uma interrupção de mudanças em curso”. Participação do psicoterapeuta
                            Pável Modernell.
                        </p>
					    <a href="https://amorexigente.org.br/domingueirae-consumo-problematico-de-drogas-uma-interrupcao-de-mudancas-em-curso/" class="card-link">Link Direto</a>
					</div>
				</div>
			</div>
            <div class="row">
            
            <div class="col-lg-4">
                <div class="card card-cascade card-cascade-wider mb-5">
                    <img class="card-img-top" src="https://responsivemart.com/wp-content/uploads/img-4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Artigo Amor Exigente</h5>
                        <p class="card-text">
                            Todos os domingos temos a DomingueirAE, às 18h, horário de Brasília. No próximo
                            encontro, você conhecerá um pouco mais sobre a maravilhosa equipe da CasAE, 
                            a sede da FEAE.
                        </p>
                        <a href="https://amorexigente.org.br/domingueirae/" class="card-link">Link Direto</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-cascade card-cascade-wider mb-5">
                    <img class="card-img-top" src="https://responsivemart.com/wp-content/uploads/img-5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">AE NO PROGRAMA VIDA MELHOR</h5>
                        <p class="card-text">Quadro do Amor-Exigente que foi ao ar em 15/02/2021 no programa Vida Melhor, da Redevida.</p>
                        <a href="https://amorexigente.org.br/ae-no-programa-vida-melhor-redevida-15-02-2021/" class="card-link">Link Direto</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-cascade card-cascade-wider mb-5">
                    <img class="card-img-top" src="https://responsivemart.com/wp-content/uploads/img-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">DOMINGUEIRAE – CONSUMO PROBLEMÁTICO DE DROGAS</h5>
                        <p class="card-text">DomingueirAE realizada no dia 14 de fevereiro, com o tema “Consumo problemático de drogas, uma interrupção de mudanças em curso”. Participação do psicoterapeuta Pável Modernell.</p>
                        <a href="https://amorexigente.org.br/domingueirae-consumo-problematico-de-drogas-uma-interrupcao-de-mudancas-em-curso/" class="card-link">Link Direto</a>
                    </div>
                </div>
            </div>
            

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.js"> </script>
			
	<script>
		Waves.attach (
			'[class*=card-img]',
			['waves-light']
		);
		Waves.init();
	</script>	
  
</div>

</main>
<!-- Fim do Conteúdo Principal -->

<!-- Inicio do Espaçador -->
<div class="long-spacing d-sm-none d-md-block d-none d-sm-block d-md-none d-lg-block"></div>
<!-- Fim do Espaçador -->

<!-- Inicio do Rodapé -->
<footer>
    <?php include_once('./includes/footer.php'); include('includes/header.php');?>
</footer>
<!-- Fim do Rodapé -->