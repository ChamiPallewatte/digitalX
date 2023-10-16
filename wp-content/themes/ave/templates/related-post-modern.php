<?php

//get value from options
if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$related_style = $page_settings_model->get_settings( 'post_style' );
	$related_style = $related_style ? $related_style : liquid_helper()->get_option( 'post-related-style' );
} else {
	$related_style = liquid_helper()->get_option( 'post-related-style' );
}

$col = '3';
if( '2' === $number_of_posts ) {
	$col = '6';
}
elseif( '3' === $number_of_posts ) {
	$col = '4';
}

?>
<div class="related-posts">

	<svg class="related-posts-paper-cut" xmlns="http://www.w3.org/2000/svg" width="1439" height="32" viewBox="0 0 1439 32" preserveAspectRatio="none"> <path d="M1416.78823,24.7574467 C1415.8353,24.4482482 1414.906,24.6567774 1413.9767,24.8724972 C1412.44099,25.2248396 1410.91316,25.5699914 1409.3302,23.5853689 C1407.73149,22.3773378 1406.17216,22.4564351 1404.59707,22.5283417 C1403.6914,22.5786763 1402.78573,22.6218203 1401.8643,22.4204818 C1400.63574,23.0892132 1399.3993,23.9520926 1398.10773,23.1107852 C1397.39106,21.4209798 1396.71378,21.7877036 1396.03649,22.1544273 C1395.45371,22.4708164 1394.86305,22.7872055 1394.23302,21.7805129 C1391.66563,22.6865362 1389.24,21.8452289 1386.98763,21.7301783 C1384.71163,20.5437192 1382.6089,20.292046 1380.67154,21.8092755 C1378.72631,23.3265051 1376.86771,22.5930576 1375.07212,21.2412133 C1373.39465,24.6927307 1371.67781,22.3701471 1370.07122,22.2694779 C1369.15768,20.759439 1368.31501,21.20526 1367.48021,21.651081 C1366.78717,22.0178047 1366.10201,22.3917191 1365.4011,21.629509 C1364.54268,21.7733222 1363.68426,21.694225 1362.84159,21.6151277 C1362.24306,21.5576024 1361.64452,21.5000771 1361.05387,21.5216491 C1359.02988,21.6007464 1358.40773,23.477509 1357.53355,19.7815091 C1353.11544,21.1980693 1328.18186,28.9927461 1326.66977,27.9644816 C1325.16557,27.5402326 1307.10723,29.5320457 1305.10687,29.6974309 C1303.94131,29.0430808 1302.86237,29.3450885 1301.83857,29.6399056 C1301.07465,29.8628161 1300.33436,30.0857266 1299.6177,29.9059601 C1297.80635,30.8119834 1296.15251,30.4955943 1294.64043,30.1720146 C1293.41187,29.9131508 1292.27781,29.654287 1291.23825,30.056964 C1290.08056,30.6969328 1289.00951,31.1283725 1288.0172,31.9984425 C1286.97765,31.0205126 1286.0326,31.6317188 1285.08755,30.4884037 C1283.18957,28.5325438 1268.45466,27.446754 1266.61181,28.0004349 C1264.75321,27.4683259 1254.29465,20.2345207 1251.96352,20.7019137 C1250.83734,22.9310187 1226.44716,24.8509253 1225.05321,24.771828 C1223.69076,25.9439058 1222.2023,26.9649797 1220.48546,24.5345362 C1216.73676,24.3403883 1214.62615,23.9880459 1213.49209,23.6285128 C1212.35015,23.2761704 1212.20052,22.923828 1212.37378,22.7368708 C1212.65729,19.7311744 1214.33476,21.607937 1212.01151,22.0178047 C1211.68861,21.8739915 1211.30272,22.1472366 1210.83019,22.4132911 C1210.14503,22.8087775 1209.27874,23.2042638 1208.15255,22.2982405 C1207.43589,22.5067697 1206.62472,22.3629565 1205.70329,22.2191432 C1204.23847,21.9890421 1202.498,21.7589409 1200.48189,22.9382094 C1198.26102,22.8303494 1196.36304,21.4928865 1194.82734,22.6074389 C1193.2365,21.8668008 1192.00793,23.8945673 1190.98413,23.9592833 C1188.84989,20.7953923 1187.77096,22.1616179 1187.21968,25.2320303 C1186.53452,26.2818668 1186.47939,26.2387229 1186.36913,26.1955789 C1186.29038,26.1596256 1186.18012,26.130863 1185.7706,26.5263493 C1185.47921,25.2104583 1185.12482,25.8144739 1184.57354,26.4184894 C1184.07739,26.9649797 1183.42373,27.5186606 1182.5338,26.5982559 C1181.97465,28.9280302 1181.25011,28.316824 1180.40744,27.7056178 C1179.99792,27.4108007 1179.55689,27.1159835 1179.09224,27.1591275 C1177.68254,27.0368863 1175.95783,26.0805283 1173.91022,25.174505 C1173.00454,24.6783494 1172.14612,24.8437346 1171.3192,25.0019291 C1170.25602,25.217649 1169.23221,25.4261782 1168.22416,24.2325284 C1166.47582,23.9952366 1164.80623,21.0470655 1163.36503,23.4918903 C1161.87657,23.7938981 1160.53775,25.5196567 1159.22255,24.3619603 C1158.6319,23.6788475 1158.07274,23.7651354 1157.52934,23.858614 C1156.88355,23.9592833 1156.26927,24.0671432 1155.64711,22.8878747 C1155.07221,21.7948942 1151.50464,22.3773378 1148.24422,22.9597813 C1146.28324,23.3049331 1144.43251,23.6572755 1143.41658,23.6428942 C1140.15616,23.5925595 1136.90361,23.5422249 1133.64318,23.4846996 C1131.60345,23.455937 1127.53973,23.7795167 1122.88536,24.1030965 C1113.63174,24.7430653 1102.06274,25.3830342 1099.47173,23.2474078 C1097.59738,21.7014156 1097.41624,22.7224895 1097.28236,23.0604506 C1097.14848,23.1755012 1097.1091,24.5201548 1095.51039,22.6146296 C1093.95893,23.0748319 1090.98202,26.6701625 1084.80769,22.8878747 C1082.79946,24.1102871 1080.85423,24.7143027 1078.972,24.68554 C1077.08978,24.6495867 1075.26268,23.9736646 1073.49859,22.6218203 C1069.97827,20.8313456 1066.78873,21.6438903 1063.8827,24.1246685 C1062.66201,23.880186 1061.50432,24.4266762 1060.37813,24.9803572 C1058.77155,25.7641392 1057.23584,26.555112 1055.72376,25.0091198 C1050.16371,28.1370574 1026.39569,26.979361 1022.16659,24.0024272 C1021.15066,23.2905518 1020.13473,21.269976 1019.19755,22.1256646 C1018.26038,22.7584428 1017.30745,21.5576024 1016.3939,20.8169643 C1015.51185,21.5504117 1014.63768,21.1117814 1013.83439,22.3557658 C1013.03897,21.5216491 1012.84996,22.3270032 1013.0626,23.1251666 C1013.30674,24.0239992 1014.0549,24.9300225 1014.99995,23.4846996 C1015.8505,23.858614 1016.8743,23.7435634 1017.90598,23.6213222 C1019.12667,23.4846996 1020.36311,23.3480771 1021.34754,24.0168085 C1023.17464,25.2104583 1024.06456,24.728684 1022.27684,23.5853689 C1021.35542,21.9315168 1019.79608,21.2555946 1017.40196,23.3193144 C1016.18126,23.2833611 1014.74006,23.3624584 1013.0626,23.9520926 C1011.37726,24.3907229 1009.45565,25.0235011 1007.21903,24.1318591 C1004.27363,24.8149719 1001.95038,23.2833611 1000.18628,23.0173066 C998.437939,23.2905518 997.225124,23.5350342 996.421831,24.0168085 C995.807548,24.1750031 995.429528,24.0024272 995.240518,23.837042 C994.941252,23.5781782 995.114511,23.3121237 995.56341,24.3188163 C996.020185,26.2602949 996.665969,25.6275167 997.327505,24.9947385 C997.768528,24.5776801 998.217427,24.1534311 998.634825,24.4913922 C999.115225,24.0599525 999.532623,24.3403883 999.753135,24.6136334 C999.997273,24.9156412 1000.02877,25.217649 999.67438,24.6208241 C999.036471,25.8288552 997.028239,24.4842015 992.720383,24.4626295 C989.018935,24.4410576 985.404116,25.4405595 982.049186,26.447252 C976.835657,28.0004349 972.244286,29.5608084 968.936609,27.2813688 C966.873248,25.8576178 964.959521,26.6701625 963.156049,27.5114699 C961.147816,26.6270186 959.289217,26.8643104 957.548748,27.0944116 C956.107546,27.2885594 954.737223,27.4755166 953.429903,27.0368863 C952.53998,26.4616334 951.69731,26.5047773 950.886142,26.5407306 C950.11435,26.5838746 949.374061,26.6198279 948.649522,26.1380536 C947.814727,25.2895556 947.03506,25.7209953 946.294771,26.1452443 C945.711989,26.490396 945.144959,26.8283571 944.585804,26.53354 C942.097171,26.4328707 909.51655,28.2880613 907.799708,30.4524504 C906.074991,32.5017888 913.871658,24.1174778 912.619466,23.9161393 C910.146584,25.0954077 908.48487,24.9228319 906.807405,24.1102871 C903.483977,24.2253377 903.499728,24.8796879 902.932697,24.6064428 C902.649182,24.0815245 902.23966,24.3979136 901.231606,26.066147 C900.199926,26.1883882 898.546087,26.8499291 895.758188,25.7209953 C892.993915,26.1668163 891.481834,26.555112 890.615537,26.5623026 C889.717739,25.0810264 889.568106,27.9357189 889.426349,27.9716722 C889.292467,28.1226761 889.221588,27.9213376 888.662433,27.7199991 C888.079652,27.5042793 886.969217,27.2957501 884.708971,27.4827073 C883.204765,26.087719 881.858068,26.3897268 880.558624,26.2459135 C879.897088,25.641898 876.912303,27.3532754 873.951145,29.0646527 C871.021488,30.7472675 868.123332,32.4370729 867.493299,31.8977733 C866.241107,30.7832208 865.012541,30.6322169 863.736722,31.5310495 C862.405776,29.7405749 856.562213,26.8715011 855.050132,25.0163105 C853.553802,24.0383805 851.931465,22.9166374 850.175246,24.2541004 C849.261697,23.9089486 848.300895,24.1102871 847.292841,24.3188163 C846.324164,24.5129642 845.30036,24.7143027 844.205676,24.4194856 C837.566695,24.8724972 837.039042,26.044575 836.763402,25.9870497 C836.487762,26.2459135 836.503513,27.0440769 830.943465,26.1740069 C827.816923,27.7631431 828.250071,27.2957501 829.722775,26.8283571 C830.825334,26.4760147 832.526425,26.1236723 833.723489,26.6557812 C834.243267,26.6413999 834.660665,26.7995945 834.896927,26.957789 C835.298574,27.2310341 835.172567,27.4970886 834.077883,26.9290264 C832.337415,26.511968 828.187068,26.7133065 819.870622,26.0949096 C816.925214,25.152933 814.389329,25.3326996 812.199961,25.5124661 C810.246857,25.6778513 808.553641,25.8360458 807.080937,25.2032677 C803.985896,25.8648085 801.875283,25.0450731 800.394704,24.9515945 C797.42567,24.0887152 796.937393,24.2684817 795.661575,24.4051043 C795.29143,23.9736646 788.242928,23.9808552 780.895159,23.9808552 C773.602518,23.9808552 766.010612,23.9808552 764.341022,23.5709876 C762.616305,23.1395479 760.694702,22.7081082 758.962109,23.0676413 C757.221641,23.434365 741.179406,23.0173066 738.226123,18.3577582 C733.587499,20.270474 696.399757,19.6089332 697.691326,18.6453846 C695.777599,20.0763262 694.297019,18.3074235 693.186585,18.0773224 C692.139154,17.6243107 691.446117,19.7096025 690.94209,21.7948942 C690.367184,24.1750031 690.036416,26.555112 689.713524,25.152933 C689.099241,24.1678124 691.532746,24.5920614 692.71406,25.0163105 C693.737864,25.3830342 693.824494,25.7497579 690.225426,25.217649 C688.272322,24.3835323 686.988628,22.1544273 686.248338,22.9597813 C685.492298,22.6433923 685.185156,19.9612756 685.271786,22.8303494 C685.311163,21.1333534 686.55548,22.8734934 687.406025,23.8729953 C686.728739,23.0748319 678.199657,23.1898825 669.76508,23.2977424 C663.724631,23.3840304 657.739311,23.4631276 654.715149,23.2114545 C653.573213,24.9731665 648.690451,25.1025984 647.162619,23.412793 C646.162441,24.3907229 646.863353,25.8719992 648.58807,26.4184894 C634.420186,25.9151431 634.546193,24.0599525 620.370434,23.5566062 C614.676504,23.3552677 604.777098,23.5853689 599.807707,24.2109564 C594.609929,24.8724972 595.586481,24.8653066 597.074936,24.8653066 C598.051488,24.8653066 599.240677,24.8653066 599.083168,25.0450731 C600.311734,23.6357035 600.941768,24.1174778 598.65002,25.6778513 C597.53171,27.9285283 595.602232,25.8648085 592.672575,25.3902248 C592.042541,25.0235011 591.381006,25.1888863 590.664342,25.3542715 C589.703541,25.577182 588.648234,25.8000925 587.482672,24.728684 C586.600624,24.8293533 585.671325,24.750256 584.679021,24.6711587 C583.395328,24.5704895 582.017129,24.4770109 580.544425,24.7574467 C577.039862,24.9012599 573.834565,25.1816957 570.889158,25.3111276 C567.935874,25.4405595 565.250356,25.4189875 562.793224,24.9659758 C560.084079,23.8729953 557.68995,24.2684817 555.532085,24.6639681 C553.760115,24.9875478 552.145653,25.3111276 550.657199,24.8149719 C531.73256,21.0974001 515.036665,27.8134777 497.112205,28.5613065 C496.592427,28.5828784 486.496136,25.8432365 483.842119,25.6347073 C481.298358,25.4333688 478.998734,26.0949096 476.738488,26.7492598 C473.352057,27.7271898 470.060131,28.7123103 466.169672,26.8139758 C463.161261,27.0081236 461.192405,26.6989252 459.853584,27.8422403 C457.191691,30.5315476 456.908176,28.1730107 455.67961,28.0723415 C455.081078,29.3954232 454.222657,29.1293687 452.671199,28.4822092 C451.174869,30.7544581 448.969751,31.1787071 445.654198,31.6532908 C442.33077,30.99175 439.369611,30.7832208 436.73922,31.0708472 C435.416149,31.2578044 434.006449,29.6183337 432.659752,27.9788629 C431.32093,26.3393921 430.052987,24.707112 429.013431,24.8796879 C424.839458,25.0091198 421.657787,25.8432365 418.988019,27.9572909 C417.617696,27.5689952 416.381255,27.6121392 415.207817,27.6552831 C414.05013,27.6984271 412.947571,27.7487617 411.845012,27.3748474 C409.907658,25.685042 410.199048,25.8288552 411.104722,25.9726684 C411.774133,26.0733377 412.782187,26.1811976 413.475224,25.5484194 C414.32577,26.893073 414.719541,25.2967463 413.679985,25.1241704 C412.632554,24.771828 410.167547,25.8144739 405.198155,26.5263493 C403.119044,26.5623026 401.536084,25.9295244 400.346896,25.3039369 C398.685182,24.4194856 397.795259,23.5422249 397.385737,24.4698202 C396.669074,24.7790186 397.306983,25.7929019 397.72438,25.9439058 C398.126027,25.4046062 398.307161,23.7651354 396.787205,25.7929019 C395.267248,27.8566217 391.951696,28.2449174 385.281213,25.7713299 C381.973536,26.6917345 379.406149,26.130863 377.421542,25.8576178 C375.476313,28.1873921 374.042986,25.9798591 373.027057,24.7934 C371.018824,24.8221626 370.632929,26.4328707 370.341538,25.5052754 C370.065898,25.7785206 369.924141,25.3039369 368.467188,25.0738358 C367.750524,25.8648085 366.687342,24.7430653 365.096507,23.6069409 C364.308965,22.6865362 363.411167,23.3336957 362.363736,23.9808552 C361.308429,24.6352054 360.111365,25.2823649 358.70954,24.3547696 C356.535923,23.1898825 354.551317,23.3480771 352.716344,23.5062716 C351.409024,23.6213222 350.188333,23.7291821 349.022771,23.369649 C346.163993,19.2134468 343.817117,22.7872055 341.73013,22.9166374 C339.808527,23.6069409 338.131062,23.1611199 336.642608,22.7152989 C334.91789,22.1975713 333.445186,21.6798436 332.145742,22.9310187 C330.649411,22.6002483 329.334216,22.7512522 328.034771,22.9094467 C327.207852,23.0029253 326.380933,23.1035946 325.514636,23.0748319 C324.758596,22.5714856 324.522333,22.8950654 324.640465,23.2114545 C324.782222,23.6069409 325.451633,24.0024272 326.341556,22.8950654 C327.979643,21.3634546 330.476152,21.694225 332.129991,21.3634546 C332.846654,21.7948942 333.405809,21.4569331 333.673573,21.1261627 C334.027967,20.6875324 333.878334,20.2417114 332.95691,21.5504117 C331.318822,23.2258358 327.184226,23.3768397 318.875656,22.8375401 C313.331359,21.5288398 309.141634,20.6156258 305.959964,21.3850265 C304.377004,23.2042638 303.014556,22.5714856 301.848993,21.9387075 C300.691306,21.3059293 299.73838,20.6803417 298.974464,22.4348631 C295.800669,23.9089486 295.06038,24.1534311 293.831814,23.9089486 C293.414417,23.1826918 292.957642,23.3624584 292.343359,23.5422249 C292.028342,23.6357035 291.666073,23.7219914 291.248675,23.6932288 C290.035861,24.5704895 288.295392,23.4846996 285.712254,23.1970732 C283.822153,25.9870497 282.073809,21.9818514 280.577479,21.0039215 C279.813563,19.9468943 279.120526,19.7024118 278.490492,19.9684663 C277.836832,18.8323418 277.269802,20.6659604 276.750024,21.9746608 C276.521636,21.7014156 276.301125,21.7517503 276.096364,21.7948942 C275.797098,21.8668008 275.513582,21.9387075 275.230067,21.0686374 C274.765417,20.0978982 274.379522,22.6074389 274.017252,23.2330265 C273.276963,24.2325284 272.631178,21.6438903 272.142902,21.5000771 C271.1821,21.8596102 273.087953,26.0589563 272.835939,24.9012599 C272.725683,25.6131353 272.135026,24.2469097 271.536494,22.8806841 C270.867084,21.3275012 270.189797,19.7815091 270.205548,21.2555946 C270.205548,21.0039215 270.7017,22.0034234 271.119097,22.9957347 C271.536494,23.9952366 271.867262,25.0019291 271.504993,24.7358747 C271.229353,24.7358747 270.552067,23.2905518 269.748774,21.8380382 C268.425703,19.46512 266.756113,17.0850111 265.944945,21.1117814 C264.527369,19.378832 258.02227,19.3428787 255.966785,17.257587 C255.234371,14.9997194 254.501957,15.409587 253.738041,15.8266454 C253.391522,16.0064119 253.037128,16.1933691 252.682734,16.1358438 C252.021199,18.7532445 251.29666,18.2498982 250.540619,17.7465519 C250.028717,17.4085909 249.508939,17.0778205 248.989161,17.6890267 C247.681841,18.0413691 246.35877,21.6654623 244.870316,19.2062562 C244.200905,19.9037503 243.5,19.1918749 242.783329,18.4728087 C241.964285,17.6530734 241.121615,16.833338 240.294696,18.1348477 C239.396897,10.9729491 238.648732,15.1651046 237.837564,15.9273147 C237.451668,17.0562485 237.050022,16.6463808 236.6405,16.2365131 C236.191601,15.7978827 235.742702,15.3520618 235.325304,16.8405286 C233.655715,20.1050888 231.883745,20.8385363 230.001519,18.2498982 C228.528815,19.8174624 225.481027,19.7815091 222.267855,19.7455558 C217.983625,19.6952211 213.392254,19.6448865 211.801419,23.3768397 C211.415523,20.4286686 203.169957,19.486692 201.232603,22.1759993 C200.783704,21.4209798 200.334805,20.6659604 199.87803,19.910941 C193.743076,22.032186 191.978982,28.719501 189.009948,24.7646373 C188.21453,25.4980848 187.419113,26.2315322 186.623695,26.9649797 C181.890566,25.8719992 172.109292,24.4051043 168.069201,26.3537735 C166.383861,27.1663182 164.69852,27.1663182 163.005305,26.9505983 C161.319964,26.7348785 159.6425,26.2962482 157.980785,26.2171509 C156.38995,25.3183182 154.830617,25.8144739 153.287034,26.3106295 C151.609569,26.8571197 149.955731,27.40361 148.309767,26.1164816 C146.340912,23.9736646 144.474437,25.5124661 142.655214,25.7353766 C140.867494,27.5905672 139.11915,27.6912364 137.43381,25.9295244 C134.960927,27.2094621 132.677055,27.6696645 130.62157,25.9942404 C129.60564,25.9007618 128.613337,23.3840304 127.739165,24.2684817 C126.849243,23.7076101 126.038074,24.3188163 125.321411,25.6275167 C122.344501,23.1970732 120.64341,23.1179759 120.674912,25.4837034 C119.178582,24.5632988 117.745255,24.9515945 116.351305,25.3398902 C114.973106,25.7138046 113.64216,26.0949096 112.33484,25.2320303 C109.735951,26.6054466 107.302445,28.1011041 104.979196,26.6629719 C102.687448,27.360466 100.545333,27.6409018 98.5371007,27.7271898 C97.3400366,28.3455866 96.1823495,28.2880613 95.0797905,28.230536 C94.3552516,28.1945827 93.6464637,28.1586294 92.9691774,28.3096333 C91.2680862,28.6619757 89.3543587,28.1154855 87.5666379,27.5689952 C85.7552909,27.0225049 84.077826,26.468824 82.8728865,26.8499291 C81.3844317,29.4960924 77.0529496,29.0143181 73.4145047,28.5325438 C71.3826459,28.2592987 69.5634234,27.9932442 68.5711202,28.2664893 C64.9484261,29.2803726 61.5383684,28.5756878 59.010358,27.871003 C56.7422365,27.2382248 55.1907783,26.6054466 54.8442598,27.2238435 C53.2849262,27.7128084 51.6704647,28.5037812 50.0087507,28.2233454 C48.87469,30.2870652 47.811508,29.8843881 46.7955786,29.4817111 C46.3545549,29.3019446 45.9371576,29.1293687 45.5118848,29.1509407 C43.015376,28.7985983 38.6051397,27.9429096 36.2818903,29.3882325 C34.1476509,28.1442481 24.9806598,27.3964193 24.8467776,27.5330419 L17.4360056,27.3748474 C6.63092669,28.3240146 3.72489599,28.7338823 1.34651857,27.3892287 C1.34651857,27.3892287 1.23626266,18.530334 1.19688555,15.5605909 C1.09450506,7.13313595 1.11025591,8.43464564 1,-3.55271368e-14 L1440,-3.55271368e-14 C1440,-3.55271368e-14 1440.56413,9.18966507 1440.78464,18.3793301 C1440.81614,19.6952211 1440.84764,21.0254935 1440.87914,22.3629565 C1440.91065,23.7291821 1440.91852,23.9449019 1441,26.6989252 C1441.06815,30.1792052 1440.68226,14.115268 1440.68226,14.0865054 C1440.78464,18.530334 1440.85552,22.9741627 1440.80039,27.4179913 C1433.68101,26.7276878 1423.08857,27.0656489 1416.78823,24.7574467 Z" transform="matrix(1 0 0 -1 -1 32)"/> </svg>

	<div class="container">

		<div class="row">
		
			<?php if( !empty( $heading ) ) { ?>
			<div class="col-md-12">
				<h3 class="related-posts-title"><?php echo esc_html( $heading ) ?></h3>
			</div><!-- /.col-md-12 -->
			<?php } ?>	

			<?php while( $related_posts->have_posts() ): $related_posts->the_post(); ?>

			<div class="col-lg-4 col-md-6 col-sm-12">

				<article class="related-post liquid-lp liquid-blog-item liquid-blog-item-grid liquid-blog-scheme-dark">

					<figure class="liquid-lp-media">
						<a href="<?php the_permalink() ?>">
							<?php liquid_the_post_thumbnail( 'liquid-rounded-blog', null, false ); ?>
						</a>
						<div class="liquid-lp-details">
							<time class="liquid-lp-date" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'ave' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
							<ul class="liquid-lp-category">
								<li><?php echo liquid_get_category(); ?></li>
							</ul>
						</div><!-- /.liquid-lp-details -->
					</figure>
					
					<div class="liquid-blog-item-inner">
						
						<a href="<?php the_permalink() ?>" class="liquid-overlay-link"><?php the_title(); ?></a>

						<header class="liquid-lp-header">
							<?php the_title( sprintf( '<h2 class="liquid-lp-title size-sm entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ) ?>
							<div class="liquid-lp-details">
								<time class="liquid-lp-date" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'ave' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
							</div><!-- /.liquid-lp-details -->
						</header>
						
						<div class="liquid-lp-excerpt">
							<?php the_excerpt(); ?>
						</div><!-- /.latest-post-excerptc -->
						
						<footer class="liquid-lp-footer">
							<a href="<?php the_permalink() ?>" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold liquid-lp-read-more">
								<span>
									<span class="btn-line btn-line-before"></span>
									<span class="btn-txt"><?php esc_html_e( 'Continue Reading', 'ave' ); ?></span>
									<span class="btn-line btn-line-after"></span>
								</span>
							</a>
						</footer>
						
					</div><!-- /.liquid-blog-item-inner -->
					
				</article><!-- /.related-post -->
	
			</div><!-- /.col-lg-4 col-md-6 col-sm-12 -->

			<?php endwhile; ?>

		</div><!-- /.row -->

	</div><!-- /.container -->

</div><!-- /.related-posts -->
<?php wp_reset_postdata();