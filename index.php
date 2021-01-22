<?php 
require_once('./header.php');
?>

<html>
    <head>
    </head>
    <body >
        <div style="width: 800px; margin: 0 auto;" class="jumbotrom mb-5">

            <div>
                <h1 class="display-4 border-bottom mx-auto">Atividade 5 - Prog. Web</h1>
                <h3 class="lead">Prof Ezequiel - discente Abner Canellas</h3>
            </div>
        </div>

        <div id="c1" style="width: 600px; margin: 0 auto;" class="card mb-5">
            <div class="card-body">
                <form action="" method="POST">
                    <fieldset class="clearfix">
                        <legend>Calculo de consumo médio de combustível</legend>
                        
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="litros">Kilometragem final: </label>
                            </div>
                            <input type="number" name="km" class="form-control" placeholder="0 Km">
                        </div>
                        <div class="input-group mt-1 ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="litros">Combustivel inicial:  </label>
                            </div>
                            <input type="number" name="litros" class="form-control" placeholder="0 L">
                        </div>
                        <?php
                            if(isset($_POST['btnKmL'])){
                                $km = (int)$_POST['km'];
                                $litros = (int)$_POST['litros'];
                                $total = $litros==0 ? 0 : $km / $litros;                       
                                echo '<div class="input-group mt-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Total:</span>
                                    </div>
                                    <span class="input-group-text">'. $total .' Km/L</span>
                                </div>';
                            }
                        ?>
                        <input type="submit" name="btnKmL" class="btn btn-outline-primary mt-2 float-end">
                    </fieldset>
                </form>
                
            </div>
        </div>

        <div id="c2" style="width: 600px; margin: 0 auto;" class="card mb-5">
            <div class="card-body">
                <form action="" method="POST">
                    <fieldset class="clearfix">
                        <legend>Calculo de aluno/sala - COVID-19</legend>
                        <div class="input-group mt-1 ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="litros">Comprimento:  </label>
                            </div>
                            <input type="number" name="comp" class="form-control" placeholder="0 metros">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="litros">Largura: </label>
                            </div>
                            <input type="number" name="larg" class="form-control" placeholder="0 metros">
                        </div>
                        <input type="submit" name="btnAlunos" class="btn btn-outline-primary mt-2 float-end">
                        <?php
                            if(isset($_POST['btnAlunos'])){
                                $comp = (int)$_POST['comp'];
                                $larg = (int)$_POST['larg'];
                                $total2 = ($comp * $larg)/2.25;                       
                                echo '<div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Max:</span>
                                    </div>
                                    <span class="input-group-text"> '. floor($total2) .' alunos</span>
                                </div>';
                            }
                        ?>
                    </fieldset>
                </form>
                
            </div>
        </div>

        <div id="c3" style="width: 600px; margin: 0 auto;" class="card mb-5">
            <div class="card-body">
                <form action="" method="POST">
                    <fieldset class="clearfix">
                        <legend>Calculo de área do trapésio/triangulo</legend>

                        <div class="mt-5 mb-3 ">
                            <label for="forma">Forma: </label>
                            <input id="trapezio" type="radio" name="forma"
                                <?php echo (isset($tipo) && $tipo=="trapezio") ? "checked": null;?>
                                value="2">
                            <label for="trapezio"> Trapezio</label>

                            <input id="triangulo" type="radio" name="forma"
                                <?php echo (isset($tipo) && $tipo=="triangulo") ? "checked": null;?>
                                value="1">
                            <label for="triangulo"> Triangulo</label>
                        </div>

                        <div class="input-group mt-1 ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="h">Aluta:  </label>
                            </div>
                            <input type="number" name="h" class="form-control" placeholder="0">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="b">Base: </label>
                            </div>
                            <input type="number" name="b" class="form-control" placeholder="0">
                        </div>

                        <?php
                            if(isset($_POST['btnTrapTrig'])){
                                $b = (int)$_POST['b'];
                                $h = (int)$_POST['h'];
                                $total3 = $_POST['forma']==2 ? 'Trapezio de '.($b * $h)/2 : 'Triangulo de '.($b * $h)/2;      
                                echo '<div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Max:</span>
                                    </div>
                                    <span class="input-group-text"> '. $total3 .'</span>
                                </div>';
                            }
                        ?>

                        <input type="submit" name="btnTrapTrig" class="btn btn-outline-primary mt-2 float-end">
                    </fieldset>
                </form>
            </div>
        </div>
        
        <div id="c4" style="width: 600px; margin: 0 auto;" class="card mb-5">
            <div class="card-body">
                <form action="" method="POST" >
                    <fieldset class="clearfix">
                        <legend>Calculo de tipo de triangulo</legend>
                        <div class="input-group mt-1 ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="ladoa">Lado A:  </label>
                            </div>
                            <input type="number" name="ladoa" class="form-control" placeholder="0">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="ladob">Lado B: </label>
                            </div>
                            <input type="number" name="ladob" class="form-control" placeholder="0">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="ladoc">Lado C: </label>
                            </div>
                            <input type="number" name="ladoc" class="form-control" placeholder="0">
                        </div>
                        <input type="submit" name="btnTipo" class="btn btn-outline-primary mt-2 float-end">

                        <?php
                            if(isset($_POST['btnTipo'])){
                                $a = (int)$_POST['ladoa'];
                                $b = (int)$_POST['ladob'];
                                $c = (int)$_POST['ladoc'];
                                if($a == $b && $c==$b){
                                    $total4 = 'Equilátero';
                                }else if($a == $b || $c==$b || $c==$a){
                                    $total4 = 'Isóceles';
                                }else{
                                    $total4 = 'Escaleno';
                                }        
                                echo '<div class="input-group mt-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tipo:</span>
                                    </div>
                                    <span class="input-group-text"> '. $total4 .'</span>
                                </div>';
                                
                            }
                        ?>
                    </fieldset>
                </form>
            </div>
        </div>
        
        <div id="c5" style="width: 600px; margin: 0 auto;" class="card mb-5">
            <div class="card-body">
                <form action="" method="POST">
                    <fieldset class="clearfix">
                        <legend>Calculo de Fibonacci</legend>
                        <div class="input-group mt-1 ">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="tam">Tamanho:  </label>
                            </div>
                            <input type="number" class="form-control" name="tam" placeholder="0">
                        </div>
                        <?php
                            if(isset($_POST['btnFibo'])){
                                $f=0; $f1=1; $f2=0;
                                echo '<div class="input-group mt-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Serie:</span>
                                        </div>
                                      </div>
                                        <p">';
                                            for($i=0; $i<$_POST['tam'];$i++){
                                                echo $f; echo $i==($_POST['tam']-1) ? '.' : ', ';
                                                $f = $f1 + $f2;
                                                $f1 = $f2;
                                                $f2 = $f;
                                         }
                                echo '</span>';
                            }

                        ?>

                        <input type="submit" name="btnFibo" class="btn btn-outline-primary mt-2 float-end">

                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>