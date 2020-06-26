<!DOCTYPE >
<html>
<head>

<title>Системы фильтрации воды</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"-->

<link rel="stylesheet" media="all" href="css/libs.css">
<link rel="stylesheet" media="all" href="css/style.min.css">

<script src='js/libs.js'></script>
<script src='js/script.min.js'></script>

<!--[if lt IE 10]>
    <style>
		* {
			opacity: 1 !important;
		}
    </style>
<![endif]-->

<script>
	var price = '';

    function send_form(a){

		var name_client = $('.' + a + ' input[name="name"]').val();
		var phone_client = $('.' + a + ' input[name="phone"]').val();
		var email_client = $('.' + a + ' input[name="email"]').val();

		if (name_client && phone_client) {
			$.ajax({
			    type: "POST",
			    url: "forma.php",
			    data: {
			        name_client: name_client,
			        phone_client: phone_client,
		            email_client: email_client,
		            price: price
		        },
		        success: function(data) {
		            $('.forma_action').html(data);
		            $('.norequired').removeClass('norequired_active');
		        }
		    });
		} else {
			$('.norequired').addClass('norequired_active');
			$('.norequired').html('<div class="uk-text-center" >Заполните поле Имя и Телефон</div>');
		}
    }
    		
    function getPrice(a) {
    	price = a;
    }
</script>
</head>
<body>


<div class='headBlock'>

	<div class='headBlock__frontImg'></div>	
	<div class='headBlock__frontImg headBlock__frontImg_opacity'></div>	

	<div class='blockContainer headBlock__actionBlock'>

		<div class='waterJet animTime-3' data-uk-scrollspy="{cls:'animate_slide_left_top'}"></div>

		<div class='row'>
			<div class='col-xs-6 headTextContainer'>
				<div class='row headRow'>
					<div class='col-xs-12 headRow__logo' 
					data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100}"></div>
					<div class='col-xs-12 headRow__phone'>
						<a class="ya-phone" href='tel://+7 (903) 722-24-93'>
							+7 (903) 722-24-93
						</a>
					</div>
				</div>

				<div class='row'>
					<div class='col-xs-12 headTextContainer__title'>
						<h1 data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 500}">Системы фильтрации воды</h1>
						<div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:450, topoffset: 500}">со скидкой 15%</div>
					</div>	
				</div>

				<div class='row'>
					<div class='col-xs-12 headTextContainer__subTitle' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:550, topoffset: 500}">
						Идеальное решение для дома, коттеджей и квартиры
					</div>
				</div>

				<div class='row'>
					<div class='col-xs-12 headTextContainer__descript'>
						<p data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:700, topoffset: 500}">Оформите заказ сейчас получите скидку</p>
						<p data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:800, topoffset: 500}">на комплект оборудования</p>
					</div>	
				</div>

				<div class='row'>
					<div class='col-xs-12 headTextContainer__button' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:900, topoffset: 800}">
						<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
					</div>
				</div>
			</div>
		</div>

		<div class='iceBlock'>
			<div class='iceBlock__ice iceBlock__ice_1' data-uk-parallax="{yp: '-50'}">
				<div class='ice ice_1 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_2' data-uk-parallax="{y: '-100'}">
				<div class='ice ice_2 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_3' data-uk-parallax="{y: '-250'}" >
				<div class='ice ice_1 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_4' data-uk-parallax="{y: '-50'}" >
				<div class='ice ice_2 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_5' data-uk-parallax="{y: '250'}" >
				<div class='ice ice_1 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_6' data-uk-parallax="{y: '-100'}" >
				<div class='ice ice_2 '></div>
			</div>
			<div class='iceBlock__ice iceBlock__ice_7' data-uk-parallax="{y: '-300'}" >
				<div class='ice ice_1 ice_1_rotateMin100'></div>
			</div>
		</div>

		<div class='imgGlass imgGlass_front animTime-3' data-uk-scrollspy="{cls:'uk-animation-slide-bottom, delay: 100, topoffset: 500'}"></div>

		<div class='imgGlass imgGlass_back animTime-3' data-uk-scrollspy="{cls:'uk-animation-slide-bottom, delay: 100, topoffset: 500'}"></div>


		<div class='subHeaderBlock'>
			<div class='subHeaderBlock__title' data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:1000, topoffset: 300}">Мы предлагаем</div>

			<div class='subHeaderBlock__buble subHeaderBlock__buble_1' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
				<div class='bubleText bubleText_1' >
					<div class='bubleText__title'>Анализ воды</div>
					<div class='bubleText__text'>Проведем полный анализ Вашей воды в лаборатории</div>
				</div>
			</div>

			<div class='subHeaderBlock__buble subHeaderBlock__buble_2' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
				<div class='bubleText bubleText_2' >
					<div class='bubleText__title'>Подбор оборудования</div>
					<div class='bubleText__text'>Подбор фильтров и оборудования под любой бюджет</div>
				</div>
			</div>

			<div class='subHeaderBlock__buble subHeaderBlock__buble_3' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
				<div class='bubleText bubleText_3' >
					<div class='bubleText__title'>Сервисное обслуживание</div>
					<div class='bubleText__text'>Произведем сервисное обслуживание и замену фильтрующих сред</div>
				</div>
			</div>

			<div class='subHeaderBlock__buble subHeaderBlock__buble_4' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
				<div class='bubleText bubleText_4' >
					<div class='bubleText__title'>Установка</div>
					<div class='bubleText__text'>Монтаж всей системы 1-2 дня</div>
				</div>
			</div>
		</div>
	</div>	

	
</div>


<div class='whiteBlockShadow'>
	<div class='blockContainer whatsProblem'>
		<div class='whatsProblem__title blockTitle'>
			Какие проблемы решает?
		</div>
		<div class='whatsProblem__tooltips tooltips'>
			<div class='tooltips__steel tooltipsIcon'>
				<div class='tooltips__text tooltipsIcon__showText'>
					Ржавчина
				</div>
			</div>

			<div class='tooltips__scum tooltipsIcon'>
				<div class='tooltips__text tooltipsIcon__showText'>
					Накипь
				</div>
			</div>

			<div class='tooltips__bacterium tooltipsIcon'>
				<div class='tooltips__text tooltipsIcon__showText'>
					Микробы
				</div>
			</div>

			<div class='tooltips__precipitate tooltipsIcon'>
				<div class='tooltips__text tooltipsIcon__showText'>
					Осадок
				</div>
			</div>

			<div class='tooltips__smell tooltipsIcon'>
				<div class='tooltips__text tooltipsIcon__showText'>
					Неприятный запах
				</div>
			</div>

		</div>
	</div>
</div>

<div class='giftBlock'>
	<div class='blockContainer gift'>
		<div class='gift__title blockTitle blockTitle_border' style='display: none;'>Вы получаете</div>

		<a name='garant'></a>

		<div class='row garant'>
			<div class='col-xs-12 garant__mainTitle blockTitle' data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:100, topoffset: 300}">
				12 мес. Гарантии
			</div>
			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:200, topoffset: 300}">
					<div class='garant__title'>
						<p>На монатжные</p><p>работы</p>
					</div>
					<div class='garant__text'>
						Бесплатно устраним любые неисправности при монтаже в короткие сроки
					</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400, topoffset: 300}">
					<div class='garant__title'>
						<p>На все</p><p>оборудование</p>
					</div>
					<div class='garant__text'>
						Бесплатно заменим любое вышедшее из строя оборудование
					</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:600, topoffset: 300}">
					<div class='garant__title'>
						<p>На</p><p>воду</p>
					</div>
					<div class='garant__text'>
						Сохранение всех норм CанПиН 2.1.4.1074.01 при сервисном обслуживании
					</div>
				</div>
			</div>
		</div>

 
		<div class='row garant garant_margin'>
			<div class='col-xs-12 garant__mainTitle blockTitle' data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:100, topoffset: 800}">
				0 руб. Переплат
			</div>
			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:200, topoffset: 300}">
					<div class='garant__title'>
						<p>Устранение</p><p>неполадок</p>
					</div>
					<div class='garant__text'>
						Бесплатный выезд и устранение неполадок в случае поломки
					</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400, topoffset: 300}">
					<div class='garant__title'>
						<p>Все</p><p>включено</p>
					</div>
					<div class='garant__text'>
						Отсутствие скрытых платежей или доплат за услуги и оборудование
					</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='garant__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:600, topoffset: 300}">
					<div class='garant__title'>
						<p>Установка</p><p>оборудования</p>
					</div>
					<div class='garant__text'>
						Бесплатный выезд на объект, подбор оборудования
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class='analis'>
	<a name='analis'></a>
	<div class='blockContainer analis__block'>
		<div class='analis__img'></div>
		<div class='analis__text'>
			<p class='analisP analisP_main' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:100, topoffset: 300}">Высокоточный анализ воды</p> 
			<p class='analisP analisP_margin' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300, topoffset: 300}">по <span>23</span> параметрам в сертифицированной лаборатории "Исвод Центр"</p>
			<p class='analisP analisP_descript' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500, topoffset: 300}">Узнайте, можно ли пить Вашу воду</p>
			<p class='analisP' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:700, topoffset: 300}">всего за 1-2 дня</p>

			<div class='analis__button' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:900, topoffset: 300}">
				<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
			</div>
			
		</div>
	</div>
</div>

<div class='garantyBlock blockMin'>
	<div class='garantyBlock__container blockContainer'>
		<div class='row'>
			<div class='garantyBlock__mainTitle col-xs-12 blockTitle' data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:100, topoffset: 300}">Так же мы гарантируем</div>
			<div class='col-xs-3'>
				<div class='garantyBlock__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
					<div class='garantyBlock__title'><span>&#8734;</span><span>+</span></div>
					<div class='garantyBlock__text'>Мы гарантируем многолетнюю эксплуатацию оборудования</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='garantyBlock__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 300}">
					<div class='garantyBlock__title'>до 2 дней</div>
					<div class='garantyBlock__text'>Монтаж всей системы очистки воды</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='garantyBlock__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:700, topoffset: 300}">
					<div class='garantyBlock__title'>100%</div>
					<div class='garantyBlock__text'>Проведение всех необходимых проверок и анализа воды</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='garantyBlock__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:900, topoffset: 300}">
					<div class='garantyBlock__title'>0 химии</div>
					<div class='garantyBlock__text'>В нашей системе мы не используем реагенты для фильтрации воды</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class='block8 blockMin'>
	<div class='block8__img'></div>
	<div class='blockContainer block8__container'>
		<div class='row'>
			<div class='col-xs-12 blockTitle block8__mainTitle' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100, topoffset: 300}">4 дня до чистой воды</div>

			<div class='col-xs-3'>
				<div class='block8__textBlock' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
					<div class='block8__title'>Отправляете заявку</div>
					<div class='block8__text'>Оставляте заявку на расчет оборудования и получате 15% скидку и в течении нескольких минут наш сотрудник свяжется с Вами</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='block8__textBlock' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 500}">
					<div class='block8__title'>Выезд специалиста</div>
					<div class='block8__text'>Наш сотрудник приезжает к Вам, заполняет бриф и отвечает на Ваши вопросы, берет пробу воды и везет ее в лабораторию на анализ.</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='block8__textBlock' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:700, topoffset: 700}">
					<div class='block8__title'>Анализ и расчет</div>
					<div class='block8__text'>Вы получаете подробный анализ воды,расчет системы и комплектацию всего оборудования, а так же схему монтажа и описание всех работ.</div>
				</div>
			</div>

			<div class='col-xs-3'>
				<div class='block8__textBlock' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:900, topoffset: 900}">
					<div class='block8__title'>Монтаж системы</div>
					<div class='block8__text'>Доставка всего необходимого оборудования на Ваш объект. Проведение монтажных и пусконаладочных работ.</div>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='block8__button' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:1200, topoffset: 300}">
				<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
			</div>	
		</div>
	</div>
	
</div>


<div class='blockPrice blockMin'>

	<div class='blockPrice__img' data-uk-parallax="{bg: '-200'}"></div>
	<a name='complect'></a>
	<div class='blockContainer'>
		<div class='row'>
			<div class='col-xs-12 blockPrice__title blockTitle'>Комплекты систем</div>
			<div class='col-xs-6 col-xs-offset-3 blockPrice__description'>В данном разделе указаны самые часто используемые комплекты фильтрации воды, но так же возможен подбор оборудования в зависимости от Ваших потребностей</div>
		</div>	
		<div class='row'>	
			<div class='col-xs-4'>
				<div class='complect' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100, topoffset: 300}">
					<div class='complect__title'>
						<p>Комплексная</p><p>система</p>
					</div>
					<div class='complect__img'>
						<a href="images/kompleksnaya.jpg" data-uk-lightbox data-lightbox-type="image" title='Комплексная система'>
							<img src='images/kompleksnaya.jpg'>
						</a>
					</div>
					<div class='complect__list complectList'>
						<div class='complectList__title'>Очистка от:</div>
						<div class='complectList__item'>
						механические примеси, песок, цветность, запах сероводорода, железо, кальций, марганец</div>
					</div>
					<div class='complect__description'>
						<div class="uk-accordion" data-uk-accordion="{showfirst: false}">
						    <div class="uk-accordion-title">
						    	<a class="dashed_link blue_link" href="#">Подробнее</a>
						    </div>
						    <div class="uk-accordion-content" aria-expanded="false">
						    	<ul class="uk-list uk-list-striped">
									<li>
										Комплексная система водоподготовки для коттеджа.  Рассчитана на удаление: механических загрязнений, железа, марганца, сероводорода, солей жесткости и тяжелых металлов. Также улучшает органолептические свойства воды
									</li>
						    	</ul>
						    </div>
						</div>
					</div>
					<div class='complect__sale'>
						<span>Скидка</span>
						<span>10 350 руб.</span>
					</div>
					<div class='complect__price'>От 58 т.р.</div>
					<div class='complect__button'>
						<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
					</div>
				</div>
			</div>


			


			<div class='col-xs-4'>
				<div class='complect' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 300}">
					<div class='complect__title'>
						<p>Обезжелезивание</p><p>и умягчения</p>
					</div>
					<div class='complect__img'>
						<a href="images/obezgelezivanie.jpg" data-uk-lightbox data-lightbox-type="image" title='Система обезжелезивания и умягчения'>
							<img src='images/obezgelezivanie.jpg'>
						</a>
					</div>
					<div class='complect__list complectList'>
						<div class='complectList__title'>Очистка от:</div>
						<div class='complectList__item'>механические примеси, песок, железо, кальций, марганец</div>
					</div>
					<div class='complect__description'>
						<div class="uk-accordion" data-uk-accordion="{showfirst: false}">
						    <div class="uk-accordion-title">
						    	<a class="dashed_link blue_link" href="#">Подробнее</a>
						    </div>
						    <div class="uk-accordion-content" aria-expanded="false">
						    	<ul class="uk-list uk-list-striped">
									<li>
										Комплексная система по умягчения воды и удаления железа.Производится за счет комбинированной ионнообменной смолы
									</li>
						    	</ul>
						    </div>
						</div>
					</div>
					<div class='complect__sale'>
						<span>Скидка</span>
						<span>8 700 руб.</span>
					</div>
					<div class='complect__price'>От 49 т.р.</div>
					<div class='complect__button'>
						<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
					</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='complect' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, topoffset: 300}">
					<div class='complect__title'>
						<p>Система</p><p>умягчения</p>
					</div>
					<div class='complect__img'>
						<a href="images/ymyagchenie.jpg" data-uk-lightbox data-lightbox-type="image" title='Система умягчения'>
							<img src='images/ymyagchenie.jpg'>
						</a>
					</div>
					<div class='complect__list complectList'>
						<div class='complectList__title'>Очистка от:</div>
						<div class='complectList__item'>кальция, магния</div>
					</div>
					<div class='complect__description'>
						<div class="uk-accordion" data-uk-accordion="{showfirst: false}">
						    <div class="uk-accordion-title">
						    	<a class="dashed_link blue_link" href="#">Подробнее</a>
						    </div>
						    <div class="uk-accordion-content" aria-expanded="false">
						    	<ul class="uk-list uk-list-striped">
									<li>
										Классическая система умягчения воды для коттеджа. Удаляет:  соли жесткости и тяжелых металлов
									</li>
						    	</ul>
						    </div>
						</div>
					</div>
					

					<div class='complect__sale'>
						<span>Скидка</span>
						<span>6 300 руб.</span>
					</div>
					<div class='complect__price'>От 35 т.р.</div>
					<div class='complect__button'>
						<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
					</div>
				</div>
			</div>

		</div>
	</div>	
</div>



<a name='obslugivanie'></a>
<div class='service blockMin'>
	<div class='blockContainer service__block'>
		<div class='question__img' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100, topoffset: 300}"></div>
		<div class='row'>
			<div class='col-xs-8 question'>
				<div class='question__item' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300, topoffset: 300}">
					У Вас уже есть установленная система?
				</div>
				<div class='question__item' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500, topoffset: 300}">
					Вас не устраивает Ваша сиcтема и результат очистки воды?
				</div>
				<div class='question__item' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:700, topoffset: 300}">
					Вы не довольны сервисным обслуживанием?
				</div>

				<div class='question__item question__item_answer' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:900, topoffset: 300}">
					Мы возьмем Ваше оборудование на обслуживание без дополнительных затрат
				</div>	

				<div class='question__button' data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:1200, topoffset: 300}">
					<a class='btn btn_orange btn_big' href="#modal" data-uk-modal onclick="getPrice('none')">Получить скидку</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class='whatGift blockMin'>
	<div class='blockContainer'>
		<div class='row'>
			<div class='col-xs-12 blockTitle whatGift__mainTitle' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100, topoffset: 300}">Вы получаете</div>
			<div class='col-xs-4'>
				<div class='whatGift__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 300}">
					<div class='whatGift__title'>Экономия</div>
					<div class='whatGift__text'>Вам не нужно приобретать заново весь комплект оборудования</div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='whatGift__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 500}">
					<div class='whatGift__title'>Анализ</div>
					<div class='whatGift__text'>Проведем анализ Вашей воды и обрудования бесплатно </div>
				</div>
			</div>

			<div class='col-xs-4'>
				<div class='whatGift__block' data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500, topoffset: 700}">
					<div class='whatGift__title'>Ремонт</div>
					<div class='whatGift__text'>Осуществим замену компонентов системы и произведем ремонт</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class='blockContainer blockMin'>
	<div class='faq'>
		<div class='row'>
			<div class='col-xs-12 faq__mainTitle blockTitle'>Ответы на вопросы</div>
		</div>
		<div class='row'>
			<div class='col-xs-6'> 
				<div class='faq__item'>
					<div class='faq__title'>
						Как выбрать какая система или оборудовани нужны именно для меня?
					</div>
					<div class='faq__text'>
						Все оборудование подбирается под Ваши нужды и в соответствии с проведенным анализом воды.
					</div>
				</div>

				<div class='faq__item'>
					<div class='faq__title'>
						Какой срок службы у Ваших систем очистки воды?
					</div>
					<div class='faq__text'>
						Все оборудование может служить долгое время при соблюдении всех правил эксплуатации и своевременной замене фильтрующих сред.
					</div>
				</div>

				<div class='faq__item'>
					<div class='faq__title'>
						Как часто необходимо менять фильтрующие среды?
					</div>
					<div class='faq__text'>
						Угольные фильтры раз в год. Обезжелезиватель раз в два года. Умягчение раз в 5-7 лет.
					</div>
				</div>
			</div>

			<div class='col-xs-6'> 
				<div class='faq__item'>
					<div class='faq__title'>
						Как часто необходимо проводить сервисное обслуживание?
					</div>
					<div class='faq__text'>
						Сервисное обслуживание проводится 1 раз в 6 месяцев.
					</div>
				</div>

				<div class='faq__item'>
					<div class='faq__title'>
						Какие гарантии Вы даете?
					</div>
					<div class='faq__text'>
						Мы даем гарантию 12 месяцев на все монтажные работы и установленное оборудование, а так же бесплатное устранение всех неполадок.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class='footer blockMin'>
	<div class='blockContainer'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='footer__question'>
					Если у Вас остались вопросы, Вы можете проконсультироваться у нашего специалиста по номеру
				</div>

				<div class='footer__phone'>
					<a class="ya-phone" href='tel://+7 (903) 722-24-93'>+7 (903) 722-24-93</a>
				</div>

				<div class='footer__copyright'>
					<span>For Eye Studio</span><a class='dashed_link' href='http://for-eye.ru'>Разработка сайтов</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="modal" class="uk-modal">
    <div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<form action="#" method="POST" class="form_modal forma_action">
		    <div class="title">Получить скидку</div>
		    <div class="norequired"></div>
		    <div class="label"><input type="text" class="placeholder" name="name" placeholder="Ваше имя" required></div>
			<div class="label"><input type="text" class="placeholder" name="email" placeholder="Ваш e-mail" ></div>
			<div class="label"><input type="text" class="phone placeholder" name="phone" placeholder="Ваш телефон" required></div>
			<div class="label"><a class='btn btn_orange btn_big' onclick="send_form('form_modal'); yaCounter39965805.reachGoal('zakaz'); return true;">Получить скидку</a></div>
		</form>				
    </div>
</div>

<script>
	$(function($){
   		$(".phone").mask("+7 (999) 999-99-99");
	});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39965805 = new Ya.Metrika({
                    id:39965805,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39965805" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>