"use strict";
var VARIANTS = ["Mr. Robot", "Firefly", "Friends", "Doctor Who", "Rick and morty", "The Girlfriend Experience", "Stranger Things"],
    DEAR_EDITORS = [["NDUzLTQxMy00MGItNDcwLTQxMC00MDEtNDc3LTBiLTQxMC02MC0wNy0xMS00MGMtNDFlLTQ3NC00NzMtNDEzLTQ3Ni00N2ItNDZhLTQwYi00NzYtNDEyLTExLTQ3YS00MTMtNDcxLTQ3Yi00MTEtNDczLTQ3MC00NmItMTEtMDAtMDAtMDAK"
        , "MDMtNTktMWYtNmUtNzktNWUtMmMtNDQtNDUtNmUtMDYtMTEtNDBmLTQxZS00NzEtNDc2LTQxYi00MGEtNmUtNDE1LTExLTQwYi00MWItNDBiLTQ3Yi00NmItNDA0LTYyLTBiLTQwZi00MGMtNDEwLTQwOS00MDktNDFiLTQ3Zi00MDctNDEzLTQwOC00MGYtNDY0LTExLTQ3YS00MTUtNDcwLTQwYy00MTUtNDAzLTQ3Yi00NmItNDBjLTQwNS00MTctNDA5LTZlLTQ2YS00NzctNDdiLTQxNi00MDEtNDcyLTQxMy0xMS00N2MtNDFjLTQwYS00NzAtNDE3LTQwMS02ZS00MTMtMTEtNDc2LTQxNi00NzMtNDdiLTQxOC00NzEtNDdlLTQ2ZC00MDktNDdiLTQxMi0xMS00MGUtNDFlLTQwMS00NzUtNDY3LTQwYy00NzAtNDE4LTQwZi02ZS00MTctNDA5LTQwZS00MWItMWYtNmUtNDBhLTQwNC00MGUtNDEzLTQwMS00NzUtMGItNDBjLTQ3Yi0wYi00NzMtNDcwLTQxMC00N2QtNDc0LTQxNS0xMS00NzQtNDZiLTQwMS00MGYtNDEzLTQwMy02ZS00NmEtMTEtNDBjLTQxNS00NzYtNDc0LTQxMy0xMS00NzktNDZiLTQwNC00NzMtNDEzLTQ3ZS02ZS00MTEtNDA5LTQ3My00MTUtNDBkLTQ3ZS00MTYtNDAxLTYyLTBiLTQwYy00NzAtMGItNDA5LTZlLTQxMy00MGMtNDBjLTQxZS00NzEtNDdiLTQ2YS00MDQtNDczLTBiLTc4LTFhLTA2LTQ3MC00NzEtNDFlLTQ3Ny00NzYtNDFiLTQwYS00NzYtNDZhLTQ3My00N2UtNDE3LTBiLTZlLTQ2NC0xMS00MGQtNDE5LTQwNC00MGUtNDFlLTQwYy02Mi0wYi00NzYtNDBjLTQxNS0xMS00NzQtNDFiLTQwNy00N2EtNDYwLTQwOC02ZS00MTQtNDcxLTQ3MC00MTgtNDcxLTQ3ZS00MTctNDBkLTQ3Ni00NmEtNDczLTZlLTQxNi00MDQtNmUtNDZiLTQwMS00NzktMGItNDcwLTQwYy00MWItNDAzLTQ3Ni00MTAtMTEtNDdiLTQxOC00MGYtNmUtNDE2LTQwMS02ZS00MTQtNDAxLTQwZC00MWMtNDcyLTYyLTBiLTQ3Ni00MGMtNDE1LTQwMC00MDUtMGItNDcxLTQ3ZS00NmEtNDcwLTQ3Mi00MTUtNDczLTQwZS00MWUtNDczLTQwMi0wYi00MDMtNDA1LTQxOS00MGYtNDdhLTBiLTQ3My00N2ItNDZiLTQwZC00NzYtNDE2LTQwMS00NzUtNDFiLTFmLTZlLTQwZS00MGYtNDBjLTQxMy00NzMtNDdiLTBiLTQwYy00N2UtNDY4LTQ3Ni00NzYtNDY5LTQ3ZC00MGYtNDY0LTExLTQ3MS00NmItNDAxLTQ3Yy00MTMtNDBhLTQwMi00MTYtNDBmLTZlLTQ2OC00MGMtNDc2LTQ2Yy00NzMtNDcwLTQxZC00MDEtNDBjLTQ2Ny0xMS00MGYtNDE5LTQwZi00NzctMGItNDBiLTQ3MC00MTctNDBlLTQwMi00NjUtNDczLTQ3Yi00NmItMTEtNDc2LTBiLTQwYy00N2UtNDZjLTQwMS00MGMtNDY3LTExLTQwZi00MTUtNDBkLTQ3My00MWUtNDAzLTQ3ZS00NjktNDdkLTQwZi00NjQtMTEtNDdjLTBiLTQ3MS00N2ItNDFiLTQwYS00MDItNDE2LTQwZi00MGYtNDY5LTQwOS03MS0wYi00MTAtNDcyLTQxZS00MGEtNDcwLTBiLTQ3MC00NzItNDE1LTQ3My00MGUtNDEzLTQ3My00N2ItMGEK"]
        , ["Николай Воронцов, выпускающий редактор N+1", "Сложно как-то одной строкой описать всю свою любовь к&nbsp;«Светлячку». Тут и&nbsp;правдоподобно-неправдоподобные живые и&nbsp;остроумные диалоги, и&nbsp;космический вестерн как жанр, и&nbsp;совершенно потрясающее ощущение команды корабля как семьи, в&nbsp;которой и&nbsp;сама «Серенити» тоже воспринимается почти как человек. Still flying."]
        , ["Андрей Коняев, издатель N+1", 'Мне нравятся разные сериалы. Общего рецепта нет, главное, чтоб была атмосфера. "Друзей" я смотрел все десять сезонов, причем несколько раз. Он — в смысле сериал — с каждым просмотром начинает играть новыми красками. В общем, даже не обсуждается'], ["Кристина Уласович, редактор N+1", "Впервые «Доктора Кто» я&nbsp;увидела еще в&nbsp;школе: тогда его, кажется, крутили по&nbsp;СТС. В&nbsp;нем прекрасно все&nbsp;— и&nbsp;главный герой-пришелец, в&nbsp;котором человечности больше, чем в&nbsp;людях, и&nbsp;сложный и&nbsp;запутанный мир, постоянно наполняемый новыми деталями, и&nbsp;бесконечные загадки. Еще интересно смотреть на&nbsp;то, как меняются отраженные в&nbsp;сериале страхи людей: все-таки «Доктор Кто» держится в&nbsp;эфире уже полвека&nbsp;— это настоящая живая история. Отдельным пунктом стоят далеки: самое жестокое существо во Вселенной — солонка с&nbsp;вантузом, вы серьезно?"], ["Пикчер, великий и всемогущий", "Мультсериал «Рик и Морти», повествующий о приключениях гениального учёного Рика Санчеса и его внука, пришел на смену «Футураме» и занял достойное место в сердце пикчера. Невероятно изобретательный сюжет с кучей отсылок к массовой культуре и различным научно-фантастическим идеям. Настоящее, не ограниченное никакими рамками мультипликационное безумие, приправленное научным юмором, что может быть лучше? Воистину Вабба Лабба Даб Даб!"]
        , ["Егор Горшков, Менеджер спецпроектов N+1", "Я&nbsp;люблю сериалы про людей. Сериал <i>Девушка по&nbsp;вызову (The Girlfriend Experience)</i> зацепил своей атмосферой. История молодой студентки юрфака с&nbsp;амбициями. Ее&nbsp;приняли на&nbsp;практику в&nbsp;хорошую фирму и&nbsp;одновременно близкая подруга занимающаяся эскортом знакомит со&nbsp;своими клиентами. Смотришь первую, вторую, а&nbsp;затем третью серию и&nbsp;постоянно думаешь «блин, блин, блин, так не&nbsp;правильно». Кстати, главную роль играет внучка Элвиса Пресли. Советую смотреть 1&nbsp;сезон."]
        , ["Елизавета Ивтушок, редактор N+1", "<i>Очень странные дела (Stranger Things)</i> - лучший сериал последних пяти лет: атмосфера фильмов 80-х годов (привет, отсылки к&nbsp;«Останься со&nbsp;мной»), отличный саундтрек, и&nbsp;дети играют так хорошо, что хочется плакать. А&nbsp;еще он&nbsp;бывает по-настоящему жутким, в&nbsp;стиле какого-нибудь «Полтергейста» или первого «Чужого», что тоже очень круто"]
    ],
    IMG_PATH = "https://cdn.nplus1.ru/images/2018/04/18", IMG_EXT = "jpg", game = $("#game"), testFinished = !1;
VARIANTS.forEach(function (N, t) {
    $('<li data-uid="' + t + '"><img src="' + IMG_PATH + "/" + t + "." + IMG_EXT + '" /><span>' + N + "</span></li>").appendTo(game).on("click", function () {
        if (testFinished) return !1;
        testFinished = !0, game.removeClass("active");
        var N = {name: DEAR_EDITORS[t][0], text: DEAR_EDITORS[t][1], img: IMG_PATH + "/" + t + "b." + IMG_EXT},
            T = $("#t-test-results").html();
        T = T.replace(/%(\w+)%/g, function (t, T) {
            return N[T]
        }), $("#test-results").prepend(T).show();
        var M = "В редакции N+1 я — " + N.name, L = $(".social-likes-test"), D = document.location.href.split("#")[0];
        return L.data({
            url: D + (-1 !== D.indexOf("?") ? "&s=" : "?s=") + t,
            title: M,
            singleTitle: M
        }), L.find("li").attr({
            "data-title": M,
            "data-description": M,
            "data-image": IMG_PATH + "/" + t + "a." + IMG_EXT
        }), L.socialLikes(), setTimeout(function () {
            return document.location.hash = "results"
        }, 100), !0
    })


});