<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-6 d-block d-lg-flex flex-column pr-4">
                <div class="row mb-3 d-block d-lg-flex">
                    <?php if(!isset($noimage)):?>
                    <div class="col">
                        <img class="img-fluid" src="/img/user0.svg" width="100%" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="col-auto mb-3">
                        <div class="h4 text-bold">Иван Петрович Демидов-Табакан <a href="#"><i class="fa fa-cog float-right ml-5"></i></a></div>
                        <div class="mb-2">Дизайнер, Гринатом, команда стратапа UP г. Москва</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="myCanvasContainer">
                    <canvas width="600" height="200" id="myCanvas">
                        <p>Anything in here will be replaced on browsers that support the canvas element</p>
                        <ul>
                            <li><a class="btn bg-primary py-2" href="#">Дизайнер</a></li>
                            <li><a class="btn bg-primary py-2" href="#">SEO</a></li>
                            <li><a class="btn bg-primary py-2" href="#">Верстальщик</a></li>
                            <li><a class="btn bg-primary py-2" href="#">python</a></li>
                            <li><a class="btn bg-primary py-2" href="#">SMM</a></li>
                            <li><a class="btn bg-primary py-2" href="#">product manager</a></li>
                        </ul>
                    </canvas>
                </div>
            </div>
        </div>
    </div>
</div>