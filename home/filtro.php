<link rel="stylesheet/less" type="text/css" href="style.less" />
<script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
<style>
    .btn-remove {
        position: absolute;
        right: 0;
        top: 0;
        border-radius: 0px 0px 0px 20px;
        border-top: none;
        border-right: 0;
        border: none;
    }
</style>


<?php

function formatBytes($bytes, $precisao = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    // Uncomment one of the following alternatives
    // $bytes /= pow(1024, $pow);
    $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precisao) . ' ' . $units[$pow]; 
} 

$arq = "../users/$_SESSION[id]";

if (!is_dir($arq)) {
    mkdir($arq);
}

$dir = array_diff(
    scandir($arq),
    array('..', '.')
);

?>

<div id="app" class="mt-4" style="padding-left:15%;">
    <div class="search-wrapper">
        <input type="text" v-model="search" placeholder="Pesquisar" id="pesqvue" />
        <label>Pesquisar:</label>
    </div>
    <div class="wrapper">
        <div class="card" v-for="post in filteredList">
            <a v-bind:href="post.link" target="_blank" download style="color: #000000;">
                <img v-bind:src="post.img" style="width:5rem;"/>
                <h6>{{ post.title }} </h6>
                <small>{{ post.size }}</small>
                <form method="POST"><input type="hidden" name="remover" v-bind:value="post.link"><button type="submit" class="btn btn-outline-dark btn-remove" title="Apagar arquivo"><i class="fas fa-times"></i></button></form>
                <button type="button" class="btn btn-outline-secondary" onclick="alert('<input>')">Compartilhar</button>
            </a>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


<script>
    class Post {
        constructor(title, link, size, img) {
            this.title = title;
            this.link = link;
            this.size = size;
            this.img = img;
        }
    }

    const app = new Vue({
        el: '#app',
        data: {
            search: '',
            postList: [
                <?php
                foreach ($dir as $arquivo) {

                    $size = filesize($arq . '/' . $arquivo);
                    $result= formatBytes($size);
                    $ext = pathinfo($arq . '/' . $arquivo, PATHINFO_EXTENSION);
                     
                    switch (strtolower($ext)) {
                        case 'txt':
                            $img = '/projeto/img/txtimage.svg';
                            break;
                        case 'doc':
                        case 'docx':
                            $img = '/projeto/img/docimage.svg';
                            break;
                        case 'pdf':
                            $img = '/projeto/img/pdfimage.svg';
                            break;
                        case 'zip':
                            $img = '/projeto/img/zipimage.svg';
                            break;
                        case 'jpg':
                        case 'png':
                        case 'jpeg';
                            $img = $arq . '/' . $arquivo;
                            break;
                        default:
                            $img = '/projeto/img/icon.svg';
                            break;
                    }
                ?>
                    new Post(
                        '<?= $arquivo ?>',
                        '<?= $arq . '/' . $arquivo ?>',
                        '<?= $result ?>',
                        '<?= $img ?>'
                    ),
                <?php } ?>

            ]
        },
        computed: {
            filteredList() {
                return this.postList.filter(post => {
                    return post.title.toLowerCase().includes(this.search.toLowerCase())
                    print(int(input))
                })
            }
        }
    })
</script>
