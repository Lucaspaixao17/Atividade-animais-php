<?php
    $resposta = (string) readline("É mamífero? (sim/não): ");

    if($resposta === "sim"){
        $resposta = (string) readline("É quadrúpede? (sim/não): ");
        if ($resposta === "sim"){
            $resposta = (string) readline("É carnívoro? (sim/não): ");
            if($resposta === "sim"){
                echo "\nLeão\n";
            }elseif($resposta === "não"){
                $resposta = (string) readline("É herbívoro? (sim/não): ");
                if($resposta === "sim"){
                    echo "\nCavalo\n";
                }else{
                    echo "\nAnimal não identificado.\n";
                }
            }
        }elseif($resposta === "não"){
            $resposta = (string) readline("É Bípede? (sim/não): ");
            if ($resposta === "sim"){
                $resposta = (string) readline("É onívero? (sim/não): ");
                if($resposta === "sim"){
                    echo "\nHomem\n";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("É frutívero? (sim/não): ");
                    if($resposta === "sim"){
                        echo "\nMacaco\n";
                    }else{
                        echo "\nAnimal não identificado.\n";
                    }
                }
            }elseif($resposta === "não"){
                $resposta = (string) readline("É voadores? (sim/não): ");
                if($resposta === "sim"){
                    echo "\nMorcego\n";
                }elseif($resposta === "mão"){
                    $resposta = (string) readline("É aquático? (sim/não): ");
                    if($resposta === "sim"){
                        echo "\nBaleia\n";
                    }else{
                        echo "\nAnimal não identificado.\n";
                    }
                }
            }
       }
    }elseif($resposta === "não"){
        $resposta = (string) readline("É aves? (sim/não): ");
        if($resposta === "sim"){
            $resposta = (string) readline("É não voadores? (sim/não): ");
            if($resposta === "sim"){
                $resposta = (string) readline("É tropicais? (sim/não): ");
                if($resposta === "sim"){
                    echo "\nAvestruz\n";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("É polares? (sim/não): ");
                    if($resposta === "sim"){
                        echo "\nPinguim\n";
                    }else{
                        echo "\nAnimal não identificado.\n";
                    }
                }
            }elseif($resposta === "não"){
                $resposta = (string) readline("É nadadores? (sim/não): ");
                if($resposta === "sim"){
                    echo "\nPato\n";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("É de rapina? (sim/não): ");
                    if($resposta === "sim"){
                        echo "\nÁguia\n";
                    }else{
                        echo "\nAnimal não identificado.\n";
                    }
                }
            }
        }elseif($resposta === "não"){
            $resposta = (string) readline("É répteis? (sim/não): ");
            if($resposta === "sim"){
                $resposta = (string) readline("É com casco (sim/não): ");
                if($resposta === "sim"){
                    echo "\nTartaruga\n";
                }elseif($resposta === "não"){
                    $resposta = (string) readline("É carnívoro? (sim/não):");
                    if($resposta === "sim"){
                        echo "\nCrocodilo\n";
                    }elseif($resposta === "não"){
                        $resposta = (string) readline("É sem patas? (sim/não): ");
                        if($resposta === "sim"){
                            echo "\nCobra\n";
                        }else{
                            echo "\nAnimal não identificado.\n";
                        }
                    }
                }
            }else{
                echo "\nAnimal não identificado.\n";
            }
        }
    }