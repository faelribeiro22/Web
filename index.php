<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <div id="desenho">
                </div>
                <h1 id="titulo">MARCA</h1>
                <div id="login"><a href="#">Login</a> ou <a href="#">cadastre</a></div>
                <div id="busca">
                <form action="busca.php" method="POST">
                    <input type="text" name="busca" id="formulario"/>
                    <button type="submit" id="lupa"><img src="_imagens/search-3.png"/></button>
                </form>
                </div>
                <div id="contato">
                    <h3>(34)3000-0000</h3>
                    <p>sac@site.com.br</p>
                </div>
                <div id="sacola">
                    <img src="_imagens/sacola.png"/>
                    <h1>
                        compras
                    </h1>
                    <h2>R$ 00,00</h2>
                </div>
                <input type="checkbox" id="control-nav" />
                        <label for="control-nav" class="control-nav"></label>
                        <label for="control-nav" class="control-nav-close"></label>
                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                        <li><a href="#">creme redux</a></li>
                        <li><a href="#">quem somos</a></li>
                        <li><a href="#">representantes</a></li>
                        <li><a href="#">vídeos</a></li>
                        <li id="ultimo"><a href="#">fale conosco</a></li>
                    </ul>
                </nav>
            </header>
            <section id="corpo">
                <h1>Loren ipsun</h1>
                <p>Loren ipsun Loren ipsun Loren ipsun
                Loren ipsun Loren ipsun Loren ipsun 
                Loren ipsun Loren ipsun Loren ipsun</p>
            </section>
            <footer>
                <div id="rodape">
                <div id="marca">
                <h1>MARCA</h1>
                <ul>
                    <li>> <a href="#">PAGINA INICIAL</a></li>
                    <li>> <a href="#">CREME REDUX</a></li>
                    <li>> <a href="#">QUEM SOMOS</a></li>
                    <li>> <a href="#">REPRESENTANTES</a></li>
                    <li>> <a href="#">VÍDEOS</a></li>
                    <li>> <a href="#">FALE CONOSCO</a></li>
                </ul>
                </div>
                <div id="ajuda">
                <h1>AJUDA</h1>
                <ul>
                    <li>> <a href="#">COMO COMPRAR</a></li>
                    <li>> <a href="#">FORMAS DE PAGAMENTO</a></li>
                    <li>> <a href="#">FORMAS DE ENTREGA</a></li>
                    <li>> <a href="#">TROCAS E DEVELUÇÕES</a></li>
                    <li>> <a href="#">POLITÍCA DE PRIVACIDADE</a></li>
                </ul>
                </div>
                </div>
            </footer>
        </div>
    </body>
</html>
