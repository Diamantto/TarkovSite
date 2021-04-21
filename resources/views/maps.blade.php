@extends('layouts.skeleton')

@section('css-file')
<link rel="stylesheet" href="css/maps.css">
@endsection

@section('content')
<section class="title">
				<div class="container">
					<img src="img/title_map.png" alt="Карты">
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/reserv.png" alt="Карта резерва">
						</li>
						<li>
							<img src="img/laboratory.png" alt="Карта лаборатории">
						</li>
						<li>
							<img src="img/market.png" alt="Карта развязки">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта Резерва</p>
						</li>
						<li>
							<p>Карта Лаборатории</p>
						</li>
						<li>
							<p>Карта Развязки</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>Карта с выходами с локации военной базы, планировка военного комплекса базы резерва военных сил РФ.</p>
						</li>
						<li>
							<p>Тайны лаборатории, уже на нашей карте. Если вы хотите отыскать все выходи и знать планировку комплекса, переходите по ссылке.</p>
						</li>
						<li>
							<p>Все секреты торгового центра Ультра, нужные магазины и места спауна ключей — обозначены на карте Развязки.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_rez.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_lab.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_razv.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/beach.png" alt="Карта берега">
						</li>
						<li>
							<img src="img/custom.png" alt="Карта таможни">
						</li>
						<li>
							<img src="img/forest.png" alt="Карта леса">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта берега</p>
						</li>
						<li id="title_custom">
							<p>Карта таможни</p>
						</li>
						<li  id="title_forest">
							<p>Карта леса</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>Открывайте карту, чтобы знать, что интересного внутри санатория, как попасть внутрь коттеджей, где искать беспилотники или танки.</p>
						</li>
						<li>
							<p>Переходите, если вам интересно, что внутри общежития, где находятся интересные ключи и просто чтобы знать, куда вам нужно идти.</p>
						</li>
						<li>
							<p>На карте Леса вы найдете выходы для диких, где проходить квесты или отыскать места появления ключей, и узнаете много тайн.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_beach.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_custom.png" alt=""></a>
						</li>
						<li>
							<a href="#"><img src="img/b_forest.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="maps">
				<div class="container">
					<ul class="map_images">
						<li>
							<img src="img/factory.png" alt="Карта завода">
						</li>
					</ul>
					<ul class="title_map">
						<li>
							<p>Карта завода</p>
						</li>
					</ul>
					<ul class="description_map">
						<li>
							<p>На карте Завода вы можете посмотреть на места появления ключей, где выполнять квесты, а также найти нужные вам выходы.</p>
						</li>
					</ul>
					<ul class="button_map">
						<li>
							<a href="#"><img src="img/b_factory.png" alt=""></a>
						</li>
					</ul>
				</div>
			</section>
@endsection