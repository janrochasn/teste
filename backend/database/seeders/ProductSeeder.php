<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Notebook HP 256R-G9',
                'description' => 'O laptop HP 256R G9 proporciona recursos essenciais prontos para os negócios com um design fino e leve fácil de levar a qualquer lugar.',
                'price' => 2799.00,
                'category_id' => 1,
                'image_url' => 'public/imgs/00.jpg'
            ],
            [
                'name' => 'Notebook Acer Aspire 5 A515-57-55B8',
                'description' => 'Facilite suas tarefas diárias com uma linha completa de recursos para elevar seu dia a dia, com coolers duplos, uma webcam de 1.080p, um teclado com entrada de ar e uma tampa em alumínio em várias cores vibrantes.',
                'price' => 3679.00,
                'category_id' => 1,
                'image_url' => 'public/imgs/01.jpg'
            ],
            [
                'name' => 'Notebook Lenovo Ideapad 1i',
                'description' => 'O IdeaPad 1i eleva sua categoria de notebooks com um processador Intel super eficiente de 12ª geração em um chassi fino e compacto de 17,9 mm que facilita a multitarefa enquanto aumenta a eficiência energética com até 11 horas de duração da bateria e carga rápida.',
                'price' => 2970.00,
                'category_id' => 1,
                'image_url' => 'public/imgs/02.jpg'
            ],
            [
                'name' => 'Tablet VAIO TL10',
                'description' => 'O Tablet VAIO TL10 foi desenvolvido para você produzir, aprender e se divertir em um dispositivo poderoso, para ir além do esperado.​ Tecnologia que consegue te acompanhar com versatilidade nas tarefas, sem travar.',
                'price' => 1599.00,
                'category_id' => 2,
                'image_url' => 'public/imgs/03.jpg'
            ],
            [
                'name' => 'Galaxy Tab S9 FE',
                'description' => 'Tablet Samsung Galaxy Tab S9 FE, 128GB, 6GB RAM, Tela Imersiva de 10.9" 90Hz, Camera Traseira de 8MP, Câmera Frontal de 12MP Ultra Wide, Wifi 6, IP68, Android 14.',
                'price' => 2799.90,
                'category_id' => 2,
                'image_url' => 'public/imgs/04.jpg'
            ],
            [
                'name' => 'Gabinete Gamer Megalon Clanm ATX',
                'description' => 'Com visual deslumbrante, este gabinete apresenta um painel lateral em vidro temperado que exibe magnificamente seus componentes internos.',
                'price' => 216.00,
                'category_id' => 3,
                'image_url' => 'public/imgs/05.jpg'
            ],
            [
                'name' => 'Monitor LG Widescreen 24MK430H',
                'description' => 'O novo Monitor LG 23,8" conta com tecnologia IPS para melhor reprodução de cores e maior ângulo de visão, combinada com resolução Full HD (1920x1080) para melhor definição.',
                'price' => 655.90,
                'category_id' => 4,
                'image_url' => 'public/imgs/06.jpg'
            ],
            [
                'name' => 'Monitor Acer Widescreen V206HQL',
                'description' => 'Monitor V206HQL Acer possui máxima resolução de 1600 x 900 proporcionando uma imagem incrivelmente realista em um painel de LED com brilho de 200 nits (cd/m2), que oferece todos os detalhes com mais nitidez.',
                'price' => 424.30,
                'category_id' => 4,
                'image_url' => 'public/imgs/07.jpg'
            ],
            [
                'name' => 'Mouse com fio USB Logitech M90',
                'description' => 'O M90 fornece o necessário para seu conforto e controle confiável de seu computador. Desenvolvido pela Logitech, a marca especialista em mouses, apresentando a qualidade de quem já produziu mais de um bilhão de mouses.',
                'price' => 39.90,
                'category_id' => 5,
                'image_url' => 'public/imgs/08.jpg'
            ],
            [
                'name' => 'Mouse Sem Fio Logitech M240',
                'description' => 'Conheça o M240, um mouse bluetooth da Logitech que ocupa menos espaço na sua mesa. É só parear, com uma conexão Bluetooth sem fio rápida e simples, e começar a usar. Você se conecta em segundos, sem dongle ou porta.',
                'price' => 99.90,
                'category_id' => 5,
                'image_url' => 'public/imgs/09.jpg'
            ],
            [
                'name' => 'Teclado com fio USB KF100 App-Tech',
                'description' => 'Projetado especialmente para atender às necessidades de usuários que buscam um dispositivo confiável, este teclado é ideal para o uso diário em escritórios, home offices ou para gamers entusiastas.',
                'price' => 29.90,
                'category_id' => 5,
                'image_url' => 'public/imgs/10.jpg'
            ],
            [
                'name' => 'Samsung Galaxy S25',
                'description' => 'Samsung Galaxy S25 Ultra 5G, 512GB, 12GB RAM, Galaxy AI, inteligencia artificial, comando e tradução de voz, Câmera Quádrupla de 200+50+10+50, Tela Grande de 6.9" Bateria 5000mAh, Dual Chip, eSim; A Samsung apresenta o mais novo lançamento da linha S. Seu verdadeiro aliado AI, o Galaxy S25 é o novo celular com o poder da nova geração da inteligência artificial.',
                'price' => 6499.10,
                'category_id' => 7,
                'image_url' => 'public/imgs/11.jpg'
            ],
            [
                'name' => 'Apple iPhone 16',
                'description' => 'O iPhone 16 tem design resistente em alumínio aeroespacial com tela Super Retina XDR de 6,1 polegadas. A parte frontal é em Ceramic Shield de última geração, duas vezes mais resistente que qualquer vidro de smartphone.',
                'price' => 5299.00,
                'category_id' => 7,
                'image_url' => 'public/imgs/12.jpg'
            ],
            [
                'name' => 'EPSON EcoTank L1250',
                'description' => 'A EcoTank L1250 é uma impressora tanque de tinta Wi-Fi compacta que imprime com baixo custo de impressão. Com sistema 100% sem cartuchos, imprime até 4.500 páginas em preto ou 7.500 páginas coloridas.',
                'price' => 889.00,
                'category_id' => 8,
                'image_url' => 'public/imgs/13.jpg'
            ],
            [
                'name' => 'Epson Pacote com 4 tintas Ecotank',
                'description' => 'Tintas Ecotank preto, ciano, magenta e amarelo para L1110, L1210, L3110, L3210, L3150, L3250, L5190, L5290, Code T544520-4P.',
                'price' => 185.00,
                'category_id' => 9,
                'image_url' => 'public/imgs/14.jpg'
            ],
            [
                'name' => 'Headphone Philips TAH2005',
                'description' => 'O fone de ouvido Philips TAH2005 é um modelo totalmente moderno, criado especialmente para você que gosta de ouvir músicas. Possuindo faixa de cabeça ajustável acolchoada que se adapta com facilidade, além das almofadas que proporcionam longas horas de musica sem desconforto.',
                'price' => 109.70,
                'category_id' => 10,
                'image_url' => 'public/imgs/15.jpg'
            ],
            [
                'name' => 'Headphone Bluetooth Flow Preto Pulse',
                'description' => 'Headphone Bluetooth Flow, som estéreo, graves equilibrados, e incrivelmente confortável. Proporciona maior conforto à todos com hastes ajustáveis. Rápida conexão e sem interrupções quando conectado ao seu smartphone ou tablet, com o Bluetooth 5.1.',
                'price' => 141.02,
                'category_id' => 10,
                'image_url' => 'public/imgs/16.jpg'
            ],
            [
                'name' => 'Headset P2 DHH-1601 HP',
                'description' => 'Atenda chamadas e realize reuniões onde todos possam escutar claramente o que diz, a HP desenvolveu o headset DHH-1601 com design mais clean e perfeito para os suas vídeos conferencias.',
                'price' => 99.90,
                'category_id' => 11,
                'image_url' => 'public/imgs/17.jpg'
            ],
            [
                'name' => 'Headset Gamer Kraken X lite 7.1',
                'description' => 'O Headset Gamer Kraken X Lite chegou para te trazer conforto e qualidade, te conduzindo para o lugar mais alto do pódio. Com drivers de 40 mm com afinação personalizada, o Razer Kraken X Lite produz um som claro e balanceado.',
                'price' => 317.90,
                'category_id' => 11,
                'image_url' => 'public/imgs/18.jpg'
            ],
            [
                'name' => 'SSD Plus 1 TB SanDisk',
                'description' => 'O SanDisk SSD Plus oferece desempenho silencioso e confiável, além de painel de monitoramento de status para seus aplicativos de mídia favoritos.',
                'price' => 616.80,
                'category_id' => 12,
                'image_url' => 'public/imgs/19.jpg'
            ],
            [
                'name' => 'HD externo 1TB USB portátil Toshiba',
                'description' => 'Mantendo o armazenamento de dados simples, o disco rígido portátil Canvio Basics oferece operação plug & play com capacidade de armazenamento de até 1TB para permitir que você colete e armazene seu conteúdo favorito com facilidade.',
                'price' => 499.90,
                'category_id' => 12,
                'image_url' => 'public/imgs/20.jpg'
            ],
            [
                'name' => 'Cadeira Gamer UP X32FB',
                'description' => 'A cadeira gamer da Up, é excelente para todos os espaços, possui um tecido de alta qualidade, braços confortáveis, ajuste de altura e rodas silenciosas.',
                'price' => 809.10,
                'category_id' => 13,
                'image_url' => 'public/imgs/21.jpg'
            ]
        ]);
    }
}
