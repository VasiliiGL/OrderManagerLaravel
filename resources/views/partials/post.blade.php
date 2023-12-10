<section>
					<header class="major">
						<h2>Новости</h2>
					</header>
                    @foreach($posts as $post)
				        @include("posts.partials.item",["post"=>$post])
                    @endforeach

				<!--	<div class="mini-posts">
              
                 
					<article>
							<a href="#" class="image"><img src="images/Микроэлектроника2023.png" alt="" /></a>
							<p>С 9 по 14 октября ИжПЗ участвует в российском форуме «Микроэлектроника 2023» в г. Сочи</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/TrafficInfraTecExpo.jpg" alt="" /></a>
							<p>С 10 по 12 октября представители ИжПЗ посетили столицу Индии, Нью-Дели, где состоялась международная выставка TrafficInfra Tech Expo. Площадка объединила между собой специалистов в области дорожного движения со всего мира.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/Нефтегаз.jpg" alt="" /></a>
							<p>Выставка «Нефтегаз» входит в десятку крупнейших нефтегазовых смотров мира. Проводится ежегодно вместе с Национальным нефтегазовым форумом — ключевым событием деловой программы. В этом году в мероприятии участвовали более 700 компаний из России, Китая, Южной Кореи, Турции, Индии, Италии, Казахстана и других стран.</p>
						</article>
                     
					</div>-->
					<ul class="actions">
						<li><a href="{{route('home')}}" class="button">Назад</a></li>
					</ul>
				</section>