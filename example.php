<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="http://rawgit.com/tlindig/position-calculator/master/dist/position-calculator.min.js"></script>
    <meta charset="utf-8">
    <script>
        jQuery(function($) {
            var $tooltip = $('<div class="tooltip" style="display:none;position:absolute;padding:10px;background:rgba(0,0,0,0.5);"></div>').appendTo(document.body);

            var is_shown = false;

            function showTooltip(e) {
                console.log(e)
                var $target = $(".has_tooltip");
                $tooltip.text($target.data('tooltip'));
                $tooltip.show().css({
                    top: 0,
                    left: 0
                });

                var calculator = new $.PositionCalculator({
                    item: $tooltip,
                    itemAt: "top left",
                    target: $target[0],
                    targetAt: "bottom left",
                    flip: "both"
                });
                console.log(calculator);
                var posResult = calculator.calculate();
                console.log(posResult);

                $tooltip.css({
                    top: posResult.moveBy.y + "px",
                    left: posResult.moveBy.x + "px"
                });

                is_shown = true;
            }

            // $('.has_tooltip').on('focus', showTooltip);

            $(".tooltip").on("click", function(e) {
                e.stopPropagation();
            })

            $('.has_tooltip').on('click', function(e) {
                e.stopPropagation();
                showTooltip(e);
            });

            $(window).on('click', function(e) {
                $tooltip.hide();

                is_shown = false;
            });

            $(window).on('scroll', function(e) {
                if (is_shown) {
                    showTooltip(e);
                }
            });
        });
    </script>
</head>

<body>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada id ligula ac eleifend. Aenean elementum eleifend arcu id gravida. Nullam malesuada nisi non erat viverra accumsan. Maecenas ultricies eleifend libero, ut egestas lectus pellentesque sed. Aenean et laoreet libero, rutrum elementum nisl. Proin dui enim, pellentesque non est vel, porta ultricies ipsum. Nulla ornare feugiat tempus. Suspendisse ac est nec purus ultrices placerat non sit amet dui. Nunc massa justo, dignissim ac sem ut, cursus dictum mauris. Sed faucibus massa a convallis sollicitudin. Phasellus finibus vel nunc sit amet molestie. Aliquam laoreet eros gravida augue tempus cursus in non enim. Sed eu varius dolor. Nunc mollis dapibus massa ac sagittis. Sed eget luctus sapien, nec commodo enim.

        Phasellus sagittis pharetra libero, lobortis hendrerit quam interdum eget. Praesent non laoreet lacus. Curabitur euismod elementum iaculis. Fusce aliquet pharetra lorem eget ultrices. Cras risus lacus, condimentum id dignissim non, pharetra quis tellus. Praesent sem massa, efficitur tristique quam ut, imperdiet tempor sapien. Duis sodales porttitor consequat. Vestibulum sed congue ex. Integer eget purus ac justo consequat blandit non et tellus. Morbi scelerisque, nisl quis ultricies tempor, eros felis porttitor diam, laoreet ultrices mauris nisi a arcu. Sed malesuada sapien vel risus condimentum, et rutrum quam dignissim. Fusce dapibus lacus orci, quis ornare metus laoreet ut.

        Duis eu mauris felis. Praesent nec erat vel arcu commodo iaculis. Quisque vel posuere est, nec molestie tellus. Nullam sagittis nunc sit amet sodales varius. Donec sollicitudin maximus leo, eget semper eros consectetur eget. Quisque ac dui eros. Etiam placerat, libero a aliquam faucibus, nunc nunc condimentum sem, sit amet volutpat arcu ipsum et nulla. Nulla risus est, pharetra sed dui hendrerit, consequat sollicitudin ante.

        Sed rhoncus orci enim, id suscipit nibh tincidunt eget. Vestibulum in molestie velit. Sed dignissim elit vel nibh gravida, nec cursus odio gravida. Vivamus eleifend sagittis tortor, et consequat odio. Cras vitae nulla eros. Ut pulvinar libero sem, nec rhoncus nunc vestibulum a. Nullam mattis ipsum nec mi semper egestas. Aliquam ac placerat risus. Duis blandit laoreet arcu. Nulla ac congue risus, ac eleifend urna.

        Quisque vehicula elementum lacus vel sagittis. Curabitur eleifend massa arcu, quis luctus ex condimentum et. Morbi feugiat fringilla porta. Fusce eleifend, lacus sit amet fringilla interdum, erat felis malesuada lacus, eget feugiat orci felis et orci. Donec nisl enim, mattis ac consectetur a, vestibulum id ligula. Donec sed quam nec nisl elementum suscipit. Integer malesuada metus vel tristique ultricies. Integer lobortis volutpat justo, nec cursus sapien dignissim vel. Aenean molestie nibh sit amet augue iaculis mattis non efficitur purus.

        Nam sit amet lorem non lacus vehicula sodales. Quisque vel lacus commodo, pharetra justo eget, congue lectus. Nam tellus mi, accumsan a rhoncus eu, iaculis ac dui. Integer fermentum augue urna, convallis feugiat enim fermentum a. Nam leo odio, sollicitudin eget dui ac, pellentesque sollicitudin eros. Praesent nunc nisl, pulvinar eget felis vel, dignissim porta libero. Vestibulum interdum ac ligula eu molestie. Vivamus at dolor porttitor lectus interdum dapibus. In blandit volutpat cursus. Etiam a dolor arcu.

        Fusce at turpis vitae ante luctus interdum. Donec erat odio, tempor quis eleifend id, efficitur sed neque. Nulla vel ex tellus. Pellentesque in fringilla orci, ac pellentesque ligula. Aenean in consequat mi, in sagittis orci. Curabitur at massa nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin pretium volutpat neque. Aliquam varius volutpat libero, vitae interdum felis laoreet nec. Praesent ac eros neque.

        Sed sit amet erat convallis, vehicula mi vitae, varius est. Sed sit amet nisl interdum, congue justo non, porta turpis. Proin nibh justo, rutrum id nisi a, consectetur cursus nibh. Fusce eget nibh mattis nulla tincidunt aliquet at aliquam nunc. Suspendisse enim est, feugiat eget gravida id, maximus sed nibh. Duis quis metus posuere leo volutpat porta vitae in libero. Donec efficitur pellentesque sollicitudin. Nam vel iaculis arcu, in mollis turpis. Nulla nec dictum lacus.

        Duis ultrices lorem vitae tellus venenatis tincidunt. Quisque id ullamcorper urna, quis vulputate turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus in tortor quis risus fermentum facilisis. Donec vel posuere nulla, ac scelerisque augue. Nullam eleifend nulla eu mi finibus, eu volutpat elit dictum. Nullam varius ipsum urna, id iaculis justo facilisis et. Nulla scelerisque lobortis tempus.

        Integer sit amet cursus dolor, sed sodales ex. Suspendisse interdum ac tortor at ornare. Nunc tempor quam sit amet diam lacinia semper sed vitae neque. Maecenas gravida mi eu dui fermentum, vitae convallis neque dignissim. Ut auctor elit bibendum lorem malesuada egestas. Donec molestie justo sit amet euismod condimentum. Nullam efficitur magna sit amet ante ornare, a hendrerit diam lacinia. Praesent ultricies bibendum urna nec mattis. Morbi sodales elit pretium neque auctor egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam viverra vulputate sagittis. Aenean vehicula sagittis neque, id vehicula ligula accumsan quis.

        Fusce convallis velit felis, interdum efficitur nulla gravida non. Cras consectetur, risus ut commodo consectetur, felis nibh dignissim risus, eu sollicitudin quam elit sit amet est. Etiam commodo consectetur sapien. Nullam felis felis, pretium sit amet justo et, hendrerit molestie mauris. Fusce a tellus eget dui blandit sodales eget eu enim. Quisque vulputate tempor velit. Phasellus dolor ligula, scelerisque id nisl ut, dapibus sagittis sem. Praesent ex quam, molestie at purus ornare, gravida efficitur dolor. Sed nec suscipit nisl, sed viverra lorem. Suspendisse lobortis vulputate vulputate. Phasellus sagittis laoreet nunc in pretium. Morbi bibendum odio sapien, eget tempus orci tristique a.

        Nullam consectetur consectetur nulla non rutrum. Etiam sodales maximus mi vel euismod. Sed suscipit feugiat magna vel viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eget lectus quam. Aenean laoreet libero urna, eu auctor lectus porta quis. Nulla tempus viverra dui, ut finibus felis facilisis non. Etiam congue blandit dapibus. Proin ut ante ante. Proin ultrices orci pretium cursus auctor. Proin eget turpis non enim porta blandit a rhoncus risus. Sed feugiat convallis mattis. Suspendisse porta euismod malesuada. Curabitur tempor vitae ipsum in viverra. Maecenas lobortis justo orci, eget sollicitudin sapien feugiat vel. In congue, tortor eu lacinia interdum, dolor lacus ultricies urna, ut feugiat ipsum nibh nec lacus.

        Sed quis justo vestibulum, volutpat augue vitae, hendrerit felis. Etiam sodales mauris non erat sollicitudin, id eleifend leo tempor. Sed tortor eros, cursus sit amet facilisis quis, accumsan quis nunc. Integer quis placerat nunc. Cras sapien ante, hendrerit aliquam vestibulum a, semper quis sem. In convallis semper ornare. Morbi turpis lorem, malesuada finibus urna in, semper lacinia dui. Fusce eget elementum dui. Nunc luctus scelerisque eleifend. Aenean id viverra magna. Aliquam viverra tortor nisl, eget euismod risus dignissim ac. Sed vel eleifend mauris, nec faucibus ex. Aliquam convallis et nisl quis bibendum. Pellentesque cursus rutrum ipsum quis venenatis. Fusce imperdiet magna nec nisl efficitur maximus. Ut mattis nulla sapien, eget interdum leo tempor non.

        Phasellus tristique maximus mauris, sed accumsan ante ornare vitae. Donec viverra tortor sem, sed interdum enim rhoncus sed. Integer ut nisi et erat placerat mattis. Donec venenatis nisl nulla, in pretium purus placerat in. Maecenas ultricies, mi quis viverra condimentum, eros odio consequat massa, non hendrerit nulla ipsum nec nunc. Vivamus in nisl vitae neque dictum molestie ac ac urna. Aliquam erat volutpat. Nulla cursus, nibh sit amet scelerisque tristique, justo sapien vulputate dolor, in molestie augue purus quis ipsum. Vestibulum sed augue nulla. Fusce metus metus, aliquet quis fringilla at, interdum non nulla.

        Aenean facilisis feugiat ipsum, id blandit nibh cursus id. Aliquam finibus mauris eu urna tempus volutpat. Mauris fringilla orci quis lacus tincidunt, a semper lectus convallis. Sed vitae purus elementum, sodales quam vulputate, feugiat ante. Fusce eleifend risus non nisl mattis, ut pretium erat accumsan. Etiam magna urna, lacinia sit amet elit non, vestibulum molestie leo. In porttitor aliquam lorem aliquet feugiat. Nulla quis aliquam nunc. Suspendisse et egestas ipsum. Mauris ante sapien, dictum a lectus quis, pellentesque placerat turpis. Mauris vitae porttitor quam, eget malesuada nibh.

        Nulla facilisis, sem id finibus auctor, erat arcu sodales orci, vitae porttitor nunc felis vitae ex. Maecenas sed ligula et sapien venenatis viverra. Morbi tempus bibendum leo, sed blandit nisi ultricies eu. Nullam congue, turpis sed aliquam euismod, magna risus luctus lectus, vulputate tristique ipsum massa non neque. Quisque tincidunt lorem vitae risus sodales euismod. Integer ac iaculis nisl. Cras id consectetur massa. Phasellus luctus lorem eget quam vehicula, in porta risus rutrum. Mauris lacinia in lectus quis feugiat.

        Morbi in venenatis nisl, ac hendrerit justo. Fusce pulvinar gravida justo, imperdiet finibus est aliquet dignissim. Fusce non ultricies metus. Sed quis consectetur orci, eget convallis enim. Cras vel lectus viverra, malesuada nunc sit amet, ultrices augue. Vivamus imperdiet, magna quis aliquam suscipit, augue felis tempus sem, sit amet interdum justo risus fermentum nunc. Quisque tempus, sapien non ornare ullamcorper, ante arcu dictum est, quis posuere lorem diam sollicitudin nibh. Mauris sagittis nulla at lacus commodo, nec vehicula arcu cursus. Donec in magna velit. Nullam at auctor augue, nec facilisis nulla. Pellentesque volutpat cursus odio, in pharetra enim consequat in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent molestie volutpat urna, at porta neque dictum nec. Praesent efficitur velit lectus, sit amet hendrerit ex congue in. In auctor est id metus condimentum, vitae tristique dolor lobortis. Ut commodo maximus nulla a vulputate.

        Morbi felis dolor, tempor ac dignissim quis, laoreet vel mi. Donec sit amet laoreet tellus. Ut interdum eros ut ipsum semper, et vestibulum nibh dapibus. Nunc pretium ornare auctor. Nam efficitur, arcu ac ultricies varius, velit felis efficitur tellus, ac ullamcorper ligula odio et lacus. Mauris interdum mauris ut felis dapibus viverra. Etiam interdum eros massa, in lobortis metus vestibulum at. Aenean a sollicitudin erat. Aliquam varius euismod vulputate. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque venenatis consectetur mollis. Cras nibh dolor, hendrerit quis lacus ac, ultrices dapibus odio.

    </p>
    <input type="text" class="has_tooltip" data-tooltip="this is a tooltip" value="hover me" />
    <p>
        Quisque ut ipsum nec arcu venenatis tincidunt. Vivamus tempus pulvinar velit in tempus. Donec ac sollicitudin nunc, id iaculis felis. Vivamus luctus magna elit, id luctus lacus egestas quis. Aenean nec porta justo. In hac habitasse platea dictumst. Cras quis vehicula tellus. Nullam tempus dui quam. Duis ut dui sit amet elit gravida eleifend et ac leo. Pellentesque mattis commodo justo, ut tincidunt massa imperdiet sed. Phasellus vitae risus nec leo cursus auctor efficitur dapibus odio. Maecenas faucibus felis quis mi lobortis pretium. Duis vehicula magna urna, ac interdum sapien scelerisque bibendum. Maecenas at accumsan enim. Nullam at scelerisque lorem.

        Vivamus iaculis turpis massa, vitae accumsan lectus congue sed. Praesent urna libero, commodo vitae vehicula eget, fermentum nec ipsum. Curabitur blandit velit ante, at eleifend mi laoreet eget. Cras mi enim, pretium eu tortor in, commodo gravida mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum vestibulum aliquet cursus. Duis et arcu nec arcu sagittis vestibulum. Cras fermentum nibh ut mattis porttitor. Suspendisse turpis massa, vulputate eu feugiat non, feugiat sit amet tortor. Ut a mollis ante, eu vestibulum nunc. Nunc pharetra venenatis sodales. Vestibulum molestie consectetur risus, sed finibus felis consectetur ut. Cras quis mi vel felis aliquet tempor a a enim.

        In et aliquam velit. Nullam tristique nulla ut dolor sagittis, sed feugiat tellus aliquet. Integer nisl erat, luctus sed elit id, interdum maximus nibh. Donec id lacus ornare, mollis risus nec, laoreet orci. Ut cursus leo sit amet dapibus gravida. Nulla ut congue est. Curabitur tincidunt et ipsum et tempor. Suspendisse condimentum mattis nulla, sed placerat augue blandit id. In hac habitasse platea dictumst. Morbi eget varius lorem, sit amet cursus tortor. Nulla consectetur porttitor efficitur. Integer ullamcorper eu mauris et aliquam.

        Mauris nunc augue, rutrum id sem non, molestie molestie ligula. Praesent non ullamcorper ex, ut convallis ex. Nullam elit lorem, fringilla quis neque a, faucibus pulvinar ante. Quisque eu nunc nisi. Suspendisse vehicula aliquam metus, ut auctor mauris interdum eget. Praesent pretium aliquam elit ac efficitur. Vestibulum accumsan tortor arcu, in rhoncus felis pulvinar sed. Ut gravida placerat viverra.

        Nunc porta malesuada orci, ac euismod sem venenatis sed. Nunc ultrices elit sed quam gravida eleifend. Vestibulum vestibulum velit ac ipsum lobortis, sit amet tempor dolor blandit. In condimentum aliquet elementum. Integer vulputate suscipit pellentesque. Aliquam congue est id consectetur rutrum. Donec porttitor velit elit, non lobortis dolor scelerisque ac. Maecenas ac sapien iaculis justo tempor venenatis vel a ipsum. Nulla eget molestie eros, in sollicitudin ligula. Aenean eu neque at sapien eleifend euismod ac et elit. Maecenas vitae lacus ut leo eleifend fringilla. Quisque vel ipsum iaculis risus mattis convallis a vitae lectus.

        Quisque pretium nisi a arcu bibendum, sit amet tincidunt nunc congue. Aliquam egestas nulla eu mattis vulputate. Aenean dictum nibh quis est ornare luctus. Duis vitae tincidunt odio. Duis non lorem egestas mi convallis condimentum. Praesent molestie eleifend mauris, eget tincidunt leo placerat ac. Quisque luctus metus libero, ut fringilla arcu dignissim eu. Donec laoreet pellentesque lectus sit amet ultricies. Nunc sed urna ultricies, varius est ut, feugiat quam. Morbi efficitur dolor ut accumsan maximus. Nullam eget blandit arcu. Etiam vel dapibus leo, at viverra metus. Cras consequat ante lacus. Aliquam vitae ante vitae nisl dapibus consectetur et quis mi.

        Donec a fringilla erat. Morbi turpis tellus, mollis sed felis eu, imperdiet efficitur mi. Donec consequat dapibus orci ut fermentum. Aenean metus risus, molestie quis hendrerit a, venenatis et libero. Integer auctor posuere sapien, in rhoncus purus venenatis eu. Donec metus enim, hendrerit eget pretium ut, convallis vitae justo. In feugiat augue mattis est molestie volutpat. Nulla efficitur lacinia quam. In sodales, odio in porttitor commodo, metus nulla auctor nisi, non auctor neque justo non felis. Vivamus sollicitudin velit dui, vitae gravida massa tincidunt vel. Curabitur venenatis accumsan libero ut condimentum. Etiam tempor, ipsum eu tincidunt ornare, ante metus tristique lacus, ac auctor mauris quam sit amet neque.

        Vivamus euismod magna ac est varius elementum. Etiam ornare lectus in mollis pretium. Pellentesque viverra ullamcorper orci, a lacinia odio volutpat a. Morbi pharetra tortor tortor, malesuada vestibulum augue accumsan at. Cras felis diam, efficitur non porta sit amet, interdum id urna. Maecenas in placerat dolor. Nulla egestas, est in interdum dapibus, magna leo suscipit est, id rutrum est tortor vel libero. Vestibulum semper sed mauris feugiat egestas. Nulla facilisi. Mauris non augue non dolor efficitur consectetur sit amet non lacus. Vivamus aliquet, mauris vel convallis imperdiet, odio quam sollicitudin ligula, quis finibus leo libero non justo. Nam molestie metus ut tempor consequat. Ut vel ligula non mauris tempor egestas et sed leo. Etiam aliquet lacinia rhoncus.

        In gravida viverra risus, ut sollicitudin elit tincidunt quis. Donec feugiat arcu at consectetur vulputate. Phasellus vehicula augue ac posuere accumsan. Pellentesque eget turpis viverra, aliquet augue quis, molestie mi. Fusce aliquet nulla quis tortor faucibus, nec vehicula metus bibendum. Cras facilisis egestas sapien, eget ultricies nibh tincidunt at. Sed tempus ligula in feugiat vestibulum. Suspendisse et lacus vehicula, ultricies libero eu, vestibulum justo. Sed blandit lacus a orci eleifend fermentum. Donec ullamcorper non odio eget faucibus.

        Nunc consectetur pellentesque eleifend. Nunc ornare egestas tincidunt. Ut eleifend tortor quis placerat pulvinar. In feugiat non ex at vehicula. Cras accumsan convallis semper. Aenean leo lorem, dictum vel pretium id, faucibus ac dolor. Suspendisse ac eros non arcu rhoncus molestie.

        In facilisis lectus quis neque tempus dictum. Aenean eu nisl eu metus condimentum condimentum. Praesent sit amet varius nisi. Nullam rutrum nec nibh at auctor. Vivamus vestibulum massa et elit blandit lobortis. Cras eu lectus ut massa molestie facilisis vitae eu nisl. Mauris mollis quam nisl, non tempus massa faucibus at. Sed pellentesque, arcu eu venenatis tincidunt, lectus sem vulputate risus, sit amet fringilla orci ligula sed dolor. Pellentesque a neque et turpis auctor malesuada ac eget metus. Vestibulum sit amet arcu lacus. Nunc euismod porta condimentum. Quisque maximus eu massa id tempor. Donec aliquet est est, sed placerat quam aliquet in. Curabitur imperdiet metus sit amet elit aliquam, ut rutrum mauris placerat.

        Nam cursus diam eu volutpat euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Sed mauris turpis, luctus in malesuada at, placerat non magna. Curabitur nulla ligula, sollicitudin nec erat vitae, euismod faucibus libero. Ut elementum accumsan orci, vel viverra est vulputate a. Integer nec leo eget tortor fermentum ultrices.

        Morbi nec pharetra arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In finibus sem vitae magna imperdiet ultrices. Pellentesque rutrum nunc sed sapien euismod, id eleifend tortor lobortis. Morbi dapibus viverra vulputate. Mauris quis nisi ac felis aliquam pharetra non ac nisl. Praesent et nisl sit amet sem tempus sollicitudin. Phasellus posuere elit in ante vulputate, ac aliquam arcu malesuada. Ut vel lectus non ex rutrum facilisis. Nunc at lacus vel augue efficitur dignissim. Donec vestibulum nulla blandit tellus auctor tincidunt. Vivamus efficitur vitae tortor ut mollis.

    </p>
</body>

</html>