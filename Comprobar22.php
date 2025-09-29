<?php
    session_start();
    if(!isset($_SESSION["ID"])){
        ?>
        <script>
            alert("Por favor inicie sesión para enviar soluciones a problemas.");
            window.location = "Cuentas.php";
        </script>
        <?php
        exit;
    }
    if(!isset($_GET["Este_de_aqu_"])){
        ?>
        <script>
            alert("Ocurrió un error al encontrar el problema.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    if(!isset($_POST["r0"])){
        ?>
        <script>
            alert("Ocurrió un error.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    $_SESSION["Tiempo"] = time();
    if($_GET["Este_de_aqu_"] == 0) $Soluciones = ["\$2y\$10\$3aF7ps7TV/X4zzdTWiJtwepcB2LIU265xPMyqxHjyWL9dQ1sG7kae", "\$2y\$10\$3BxLk5nuUHS9Ojz4Vx5kR.EGBmIvhg7uUI0jP3KTM4lBglBwZ8IJu", "\$2y\$10\$yAGr4qYp4lZPqtEPCJMIouQnpym8RuGWNSWAF/QRHUE7cUtyYWOP.", "\$2y\$10\$nJhUFNj4iJz56WS8pALAJuEFa4mgKWdhBUCPGgKnwjAo1pzmL20kG", "\$2y\$10\$LWHxQ5sIJgCyIFfecDEhlOyzjhgIzF3q935uZZK1lWOSUIEktcQt2", "\$2y\$10\$qcCOr/1s9Ed6zu4YcPcx1uO41..Gov73qhL9TPnBCDghNphasAsU6", "\$2y\$10\$p0CM4bL..U9X5WSAXb6z/.b6NXXFRhfAZcA654rSI8NRyusIPJcSm", "\$2y\$10\$yxwk/vlSLXdrqAY61VY0I.pmoMv8jiQSp3H2NF8p4gehQh09PZhf.", "\$2y\$10\$Nl850zkA8ba9YQn2J7ipe.ZEBbFw6DVjIspjXhFRSWxj63Nih78Ta", "\$2y\$10\$n75p6CoO5mVg2p.E7HIXd.XqJAPw.OsC4mnOTkFk7f6B7Habi0i6q"];
    if($_GET["Este_de_aqu_"] == 1) $Soluciones = ["\$2y\$10\$8zZ2HnX4hgJdXaH5hPd3u.qIqQ0dejYh14X3g4NbhHnqsRYwPAEue", "\$2y\$10\$10cL3eBYS9EJNb1c6dd5.u0/JgwASuUogvu.Q89ryKQ72m/EO7O1y", "\$2y\$10\$OtcsqYAZsvSqUaxBB655feGAbNhiAQmu3BASJ07WNq./8Wi7YLXTC", "\$2y\$10\$kaFlXB7zXLziyWYAAWUur.VOJrPyZ0mFdMEaMF8Spnii5x67gjjj6", "\$2y\$10\$CtvGpApj5Oo4MuAt6tssOO/mc0g1LyN3daBD2z4.Iu44hpfLm68Ne", "\$2y\$10\$DrfDxU49Hd6MrG5ZZtd.QOqgzTOQ2UYMJzugq70eH9id4YbXfMwve", "\$2y\$10\$SgN0GJrEu6OuXXz4ydx//.y/1MUVWnrf1lZZuU8Eik5KgtWsNMEQW", "\$2y\$10\$jgChGS37RmqChsmGiw6ke..p.NJPJgqVdU6fY2z1.0uHWJCfhSq..", "\$2y\$10\$H21D33sSDLs6wmg4vZBoNeNhp83DHSgf39C8JMcLngBOb1z09Fv2.", "\$2y\$10\$de7K20yGKva8zpEdJNqsvufeWJXJQoEMLBUKNOn2h.PEUtQHOUiFe"];
    if($_GET["Este_de_aqu_"] == 2) $Soluciones = ["\$2y\$10\$xTLBU4K382abyrt7j/9B6Ohvy5DWGOkFs1HzIVkGNx576c1R39zA.", "\$2y\$10\$K8rezFwht/HF9JVAc4vheuXiBGeJeiEm9/jB0LBIqXzBLxRwKXzEK", "\$2y\$10\$9RSmVtNTP4x7JB57n0mgBuzIJ39NBlwlvERFfOyViMGo1WQRGMbKe", "\$2y\$10\$UC/ueqWstSrp5APmT1MsWenzfMdjPJe08u6dYY4RYRzPhYApgt9rq", "\$2y\$10\$Eb0Z0GrVNgllBMkt59F5meiAY1ciTy.3Y9HpIbnX1OwTgMn5C/wbm", "\$2y\$10\$Csoh/ZUlrjQ9oG36.wtRh.bGShczNTaElpuLsChDTkyWQMfYulw0a", "\$2y\$10\$R7L1AzByIBaolHdzrInIa.9rJ5QnqCiWSDZc6pTaLZl076L8leV4S", "\$2y\$10\$hZDiOyh85Z/PVlFE5UgBH.o45VxtCsQfYUr84BHga8DfpBs2htGMS", "\$2y\$10\$xokUfme7VxIiFR.ro69ekuAD1Zfv9QWkV8TrYqiezEL22RYPbIIWy", "\$2y\$10\$6mtfzVTGS5yL7DSOANF9weFOKB0KCnrqcfEND252AMFptEGg2KxeS"];
    if($_GET["Este_de_aqu_"] == 3) $Soluciones = ["\$2y\$10\$o0tHqsMsKJ8aXOgOJoC60.Gx2wtNApKM4eunF5Cp7yOZoZqFqMmXC", "\$2y\$10\$iwOen1ZkIaLow3KTK2jwpu.s4VrImFcDDun8jE7vkNWnDBMF9O/k6", "\$2y\$10\$OWBmVi20QIBTtlgmxXXr0.Fe1Aee6MwKSkUGClFVtooPqKFEq7Sw2", "\$2y\$10\$pwz4Kfk/bXiOftS58TSPxOOJ/WMNxcupxkgvfchx60YQxjqxzFNim", "\$2y\$10\$ld03wac0glpH4dW38sGGqeMPfwUjC.3fUSVvB131cliprEWoTRjL.", "\$2y\$10\$.sMJkwjMSMrF41OIR5sGd.mpUE820QtCr2/Jcd4Y0k2liObs.e1cS", "\$2y\$10\$v7PwiAwLcFYHCvDwRu1xIOfRiGXv21kvg1Y6XKgbamn1qyyZ9fBL2", "\$2y\$10\$6ENkYzBjMlvFss6yGi7O6.XLePCBEaX120Im/IVZbj1rG6EjvO38q", "\$2y\$10\$B/GVJZrvBI58cBtht4cyYuvFTJQZidwEQL475i6bRoJKcZ3xLC1/K", "\$2y\$10\$UNmbrriypGDEcLDhrTfrKO/O9RqFPJMZEllHOaj9j6FB9CeJo7vS6"];
    if($_GET["Este_de_aqu_"] == 4) $Soluciones = ["\$2y\$10\$PJhSKGTlLvv1GbQgsNY9Zucc1zD1ndgP4.nS3jADCaHj2wloyFY26", "\$2y\$10\$9WxGWpXYq131TGfPaRNTVeTwp2gGg9dNnCYSYB0tAY2lLkAeEfsaC", "\$2y\$10\$v/2lqKh7gU6Ie8xFlwyw9uhZpD2ERrs0SH3sKg0OMgIMPDyddl2m.", "\$2y\$10\$KHXTddV4VTLVNG6aeGvET.TSCwiPeL5Lfmx223WDYZxL9OxytoBKu", "\$2y\$10\$ZzPT1pVIarr5faSExiOPEOUg3hCthXV0fqiU6ufK3wwNCu2vROMpS", "\$2y\$10\$sgogOXBLt0Jw4Z2ih09f4eboFQWvqR.btFvNvoB0ADectxLw.WVvm", "\$2y\$10\$Ak5l7vtyhdLCEQhBc21WnutDMXttw1IQ84Yizw0qgfUrI5MpLLyg2", "\$2y\$10\$1y/391QQW03VsHh0nblepOxRdN9kMj5broGzwH6rteOHavuI1LUTC", "\$2y\$10\$qkUL01SwTRqCDySSOQKvfumjuOs8BZnOqZ09T4U4IFgYxQS9mGgT.", "\$2y\$10\$/wTqOfRvtLZ0ovkAM/E3NepuBGaz9ztZfaUKC9PLn//PK5yZ6UXTa"];
    if($_GET["Este_de_aqu_"] == 5) $Soluciones = ["\$2y\$10\$x7ctVy89wqLy2HR4Cf.LZOVk4LWBgGhd5MqZBk.sIpyqb.oAMjWv2", "\$2y\$10\$88POu5AjbuIS6TExSoB30ebkLxQqE0D9k8MLqM5cTTdwbvcsaC4zm", "\$2y\$10\$lC05woBfRVxLEqfNAnI1AOh3Z5BBsuT7cBXg0hHNKSuwYhHJRg7oO", "\$2y\$10\$6YqV4.6B1fyKmd2HxnWZxeaLKBBhqeROuy5XsmOQMiS4kkVYvWVtK", "\$2y\$10\$9Pp9LJEJmURRqGp9Dwx2GelCUvm6hh/KAYI7zRtl7pKeN482Adkp2", "\$2y\$10\$HNkxanbYCFRjrPIEW38EfeJSl9B3mNtp/cAtNCAy13pj0PQhT35tS", "\$2y\$10\$astqi6K.wL6.O/6iCLnrJuKm5LCI3WPXVF6jvXWGa2hkUC8XGEpAC", "\$2y\$10\$zgUPc/2oVv9RRBeY9OjmQ.DZ7lBQiGAymSILb0ofDCN2t5RyPiAny", "\$2y\$10\$dKM9bw.stcpoouhj6KifpeREhnkCzngB7lkKbPIoFHeCRMdv0DHPm", "\$2y\$10\$PfD1pQwLCgnmkwxbCQ.IwuPhJ/hti3qqxqvgCG0dA9ARUNF1lLMrG"];
    if($_GET["Este_de_aqu_"] == 6) $Soluciones = ["\$2y\$10\$k7r018UHU2b5xbhDpy4lTuWS7b0VViLOYNwuePjbNDsKWkVnt1Zl.", "\$2y\$10\$bReCVgiYS8hZkdUEWdPMnu.A8T9h56rEUYumf247XU7.H.KU.3I.O", "\$2y\$10\$sh4piZV79MZQfw.LsVraf.njU3kKCFaXarEDS9N7HhDXBo8R.p6nu", "\$2y\$10\$ELhs108jGgjdSiwXwz9pM.XGu4LVZ/fMJ8TfDhwWKWaOFymIGAu2O", "\$2y\$10\$Js5XVlhIC.qByygeNsoOaeps/VFCPNfqikdN3kFqkICPgiuo6WRX6", "\$2y\$10\$BSFzTEI9OxNzJSA/1rbaMOae6UidB22OSRfro/LAyO4Fi7snwGUa2", "\$2y\$10\$I7LR3.tUJUJbvrnnY56JGOz2bXyJ1o5.7jcBAGftYnmnLbaHSs/b2", "\$2y\$10\$ZmtCoLLT8XCT6NSVatrSvuBvZ0wNcrkuIW94acZTVwUjBzjvjd0cW", "\$2y\$10\$5A896doP5IoaarL3KjaatOq0TOj58LHBkSBJCDhFYZOmEC2/D7/de", "\$2y\$10\$Sg0ZSrWKLfMn.hzTuD3HWO9L28Y6utyiLDFxKo2glOxnqvQGChES6"];
    if($_GET["Este_de_aqu_"] == 7) $Soluciones = ["\$2y\$10\$H0oNuzj8JYzMh8mWTqOhievRcCz0MhFHlqffnr6.i3/ISUeKS/TpK", "\$2y\$10\$Ma28HnxrqD5agaSysze9/ei5lHPL2/bmZl473h9BBbr9LutvgtRAy", "\$2y\$10\$mNHhHg7WjaqO.oqe3XWWMu1HQ76k5oPHxs/YxXch/YY/mNC1keas6", "\$2y\$10\$aJx9PnKBD.4dwWKMFerqNOBZHgQFgaxi/wuxpPEzdzOmIwWiqDzHe", "\$2y\$10\$mi.fKF4wKT/dZcqd8GuI/.C4C7ghgoCoQ57g2CFo2iC70f6EZeHHu", "\$2y\$10\$Frbb6oV34RXRrWmIDRI.6.18LuE94l.t8pit2c8ZNLS7WqnRzZ/0.", "\$2y\$10\$l/L9cCsEIP5lhH4t4/KlKO.r5mqu9HTy5Z3agFqtBaXIvG34b4lL6", "\$2y\$10\$dEkV4FopH/Bf4NywTbSKHudfPzjR02C2m99dVoAqo9BMTPkMszfvW", "\$2y\$10\$x.vk8Ip1yn5mhUwKigMBFe8ULa2lyfK04sbBHiQVRV6YxxlcVeuD2", "\$2y\$10\$.KWA1WgmpXh1rbEt.mHq0uhOQ78nYFMqhp.Ey2yIBsPQmvPeos4Ba"];
    if($_GET["Este_de_aqu_"] == 8) $Soluciones = ["\$2y\$10\$qDdKl2hz7ZZ4HViAYm7q9uruhDKFRAkJ4ebRzHVS.q4LHs4AYvfrS", "\$2y\$10\$J3HIxiv7utWLLGxwmZNuy.fRftV8paWesB9EviGjNc6SlTetFf8Ey", "\$2y\$10\$sLEAHe0lK3twDpoJbp/B..HCzxd8zqQUpSyprZgEgzN6chxdKuCzS", "\$2y\$10\$/JGaEcD1kw8.icMKMmSCj.Wpb0Xr8U8POOpW93cQWEs2UQU5Ws4Sy", "\$2y\$10\$JxNyamxB6qGwXP21Dus0uutJu/jC5lJ/zcZKMPA36R4jV3upA0vSW", "\$2y\$10\$obDFko/hg9ykwYwp64rvx.j6mdD9esLI2Z0fZnta1VgcRGVuvrqRe", "\$2y\$10\$5J0i2M9RDZQWHiAdpqDMDuUcC80tZ7nzSDHNPw9urP8oWv8qPA9mC", "\$2y\$10\$AmWHUjuAobQIGlo9MWl6wucNbIdaacBRW58Tl8F0X0yCvP6a2IZay", "\$2y\$10\$qlHBXX/O74RCUncWZk/ZU.CoC.6xlmHFVAcQ6EsYXHiTVPBxDO5LO", "\$2y\$10\$bj4JYbF7SEfKPLXbtrr/JOS.Q3mp/Jpf8MeoU8mBZbFspmt5qiIsG"];
    if($_GET["Este_de_aqu_"] == 9) $Soluciones = ["\$2y\$10\$cv/PBg6ceoDWqugRrycr2OM/ZRIki6RcFwzGH2TMNj72.TYIiuLo.", "\$2y\$10\$IVJqounJ/1gBFALFDHemJuYlnZn/NhqUv7YB9jwR2KjU8yFGh59fi", "\$2y\$10\$rDd/AyfHXcx48Vk7uMkI5O8iUtIVu9D9dqdkjlpVotAEr4Atl1iwK", "\$2y\$10\$uyOqaf2hxmPG.435Bvxrw.9ZJViioEuOUi3ks6tHzPSYO4yNMRLge", "\$2y\$10\$rzDcMgT3r28omrMmzHXMuOZ84BmokMs9srnCJir6c9dcR/s29rYYW", "\$2y\$10\$YEodvSobfBzSHudJsS/HnOzRhVAcF/Pd/OgYuwcVK1hnUazdZe6eq", "\$2y\$10\$5D4Wn1C4PbL6arpmi.sUr.fFgyJ80dyVuHzNdZUBmX9wWjzxOGNNe", "\$2y\$10\$a2mcgEdx53/kblqpJzfXcOUUviLhzGnOVB1Fd13/F1JuNAeM8c.Va", "\$2y\$10\$dUtFPXJJR0M8WOUp1auZHOB5nhvz1XmwiO0NnifisZK6OsKxI9JQO", "\$2y\$10\$jC1HRtz6Z6/2EAbcoVio0.qTh0o0HiM5f2LCiXmcxW3xlPNrA4SUS"];
    if(password_verify($_POST["r0"], $Soluciones[$_SESSION["Casitos"][0]]) and password_verify($_POST["r1"], $Soluciones[$_SESSION["Casitos"][1]]) and password_verify($_POST["r2"], $Soluciones[$_SESSION["Casitos"][2]])){
        include("Conectar22.php");
        $Cambio = $_SESSION["Resueltos"] + 1;
        if($_SESSION["Problemas"][$_GET["Este_de_aqu_"]] == "1") $Cambio--;
        $_SESSION["Problemas"][$_GET["Este_de_aqu_"]] = "1";
        $Nuevito = $_SESSION["Problemas"];
        $Este_usuario = $_SESSION["ID"];
        $Conectar -> query("UPDATE Usuarios SET Problemas = '$Nuevito', Problemas_resueltos = $Cambio WHERE ID = $Este_usuario");
        $_SESSION["Resueltos"] = $Cambio;
        ?>
        <script>
            alert("Solución correcta.");
            window.location = "<?php echo $_GET['Antes'] ?>";
        </script>
        <?php
        exit;
    } else {
        ?>
        <script>
            alert("Solución incorrecta.");
            window.location = "<?php echo $_GET['Antes'] ?>";
        </script>
        <?php
        exit;
    }
?>