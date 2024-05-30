<div id="tic-tac-toe">
    <!-- top center container-->
    <div class="top-container">
        <h1><span>Tic</span><span>Tac</span><span>Toe</span></h1>
        <h2>Tour de <span></span> </h2>
        <div class="setting" id="setting"><i class="fa-solid fa-gear"></i></div>
        <div class="reset" id="reset"><i class="fa-solid fa-rotate-right"></i></div>
    </div>
    <!-- bottom center container-->
    <div class="bottom-container">
        <!-- left side container-->
        <div class="left-side">
            <div class="infos-box">
                <div class="avatar"><i class="fa-solid fa-user"></i></div>
                <div class="infos-center">
                    <h3 class="player"><?php echo wp_get_current_user()->display_name; ?> </h3>
                    <div class="box-pieces">
                        <p><i class="fa-solid fa-xmark" data-x></i></p>
                        <p><i class="fa-solid fa-xmark" data-x></i></p>
                        <p><i class="fa-solid fa-xmark" data-x></i></p>
                        <p><i class="fa-solid fa-xmark" data-x></i></p>
                        <p><i class="fa-solid fa-xmark" data-x></i></p>
                    </div>
                    <div class="score">
                        <span>Sc</span><span>or</span><span>e:</span><span>0</span>
                        <span class="trophee">🏆</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle side container-->
        <div class="middle-side">
            <div class="tableau-du-jeux" id="game-board">
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
                <div class="case" data-case></div>
            </div>
        </div>
        <!--right side container-->
        <div class="right-side">
            <div class="infos-box">
                <div class="avatar"><i class="fa-solid fa-user"></i></div>
                <div class="infos-center">
                    <h3 class="player"> </h3>
                    <div class="box-pieces">
                        <p><i class="fa-regular fa-circle" data-o></i></p>
                        <p><i class="fa-regular fa-circle" data-o></i></p>
                        <p><i class="fa-regular fa-circle" data-o></i></p>
                        <p><i class="fa-regular fa-circle" data-o></i></p>
                        <p><i class="fa-regular fa-circle" data-o></i></p>
                    </div>
                    <div class="score">
                        <span>Sc</span><span>or</span><span>e:</span><span>0</span>
                        <span class="trophee">🏆</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Winning container  -->
    <div class="message" id="message">
        <div data-win-message></div>
    </div>

    <!-- pseudoname-box container -->
    <div>
        <form action="" class="pseudo-box box-show box">
            <input type="text" placeholder="Entrer le nom du joueur 2" size="25" required />
            <button id="entrer">entrer</button>
        </form>
    </div>

</div>