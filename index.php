<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO PAGE -->
    <title>Template</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body id="app">




    <!-- HEADER -->
    <header>
        
            <div class="container">
                <div class="row">
                    <div class="col"><h1>PHP DISCHI JSON</h1></div>
                </div>
            </div>
        
    </header>



    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col ">
                    <ul>
                        <li v-for="disc in discs" class="py-3">
                            <div>
                            
                                <img class="w-25 h-25" :src="disc.images" alt="">

                            </div>
                            <div>
                                Album:<strong class="text-danger px-2">{{ disc.name }}</strong>

                            </div>
                            <div>

                                Artist :<strong class="text-danger px-2">{{ disc.Artist }}</strong>
                            </div>
                            <div>

                                Genre :<strong class="text-danger px-2"> {{ disc.Genres }}</strong>
                            </div>
                            <div>
                                Years:<strong class="text-danger px-2">{{ disc.Year }}</strong>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>



    <!-- VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS SCRIPT.JS -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>