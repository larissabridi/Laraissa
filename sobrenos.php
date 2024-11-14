
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Laraissa</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #000000;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1,
        h2 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .founders {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .founder {
            text-align: center;
            margin: 10px;
            flex: 1 1 200px;
            /* Responsivo */
            max-width: 300px;
            /* Limita a largura */
            background-color: #f0f8ff;
            border: 1px solid #000000;
            /* Borda azul */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .founder:hover {
            transform: scale(1.05);
            /* Efeito de zoom ao passar o mouse */
        }

        .founder img {
            width: 150px;
            /* Ajuste conforme necessário */
            height: auto;
            /* Mantém a proporção */
            border: 3px solid #000000;
            /* Borda azul */
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color:#f0f8ff;
            color:#000000;
            margin-top: 20px;
        }

        .footer-content {
            display: flex;
            /* Usar flexbox para centralizar as imagens */
            justify-content: center;
            /* Centraliza os itens horizontalmente */
            gap: 200px;
            /* Espaçamento entre as imagens */
        }

        .footer-content img {
            max-width: 50px;
            /* Define um tamanho máximo para as imagens */
            height: auto;
            /* Mantém a proporção da imagem */
        }
    </style>
</head>

<body>
    <header>
        <h1>Sobre Nós</h1>
    </header>
    <main>
        <section>
            <h2>Bem-vinda à Laraissa!</h2>
            <p>
                Na Laraissa, nossa paixão é a moda feminina! Fundada com o objetivo de empoderar mulheres através da
                vestimenta, nossa loja oferece uma coleção diversificada que combina elegância, conforto e
                personalidade. Acreditamos que cada peça deve contar uma história e refletir a essência de quem a veste.
            </p>
            <p>
                Nossa curadoria é feita com carinho, buscando sempre as últimas tendências e clássicos atemporais, para
                que você encontre algo especial, seja para o dia a dia ou uma ocasião especial. Valorizamos a qualidade
                e a sustentabilidade, escolhendo fornecedores que respeitam o meio ambiente e as pessoas.
            </p>
            <p>
                Descubra a Laraissa e permita-se expressar seu estilo único! Estamos aqui para acompanhá-la em cada
                passo dessa jornada.
            </p>
        </section>

        <section class="founders">
            <div class="founder">
                <img src="img/lara.png" alt="Fundadora 1">
                <h3>Lara Crispim</h3>
                <p>Lara é a responsável pela curadoria das coleções da Laraissa, focada em criar roupas que unem
                    tendência e conforto, fazendo cada mulher se sentir especial.</p>
            </div>
            <div class="founder">
                <img src="img/larissa.png" alt="Fundadora 2">
                <h3>Larissa Bridi</h3>
                <p>Larissa é o coração da Laraissa, dedicando-se a construir uma marca que valoriza a autenticidade e a
                    autoestima de cada mulher que veste suas peças.</p>
            </div>
        </section>
    </main>



    <?php
include "incs/rodape.php";
?>

</body>

</html>