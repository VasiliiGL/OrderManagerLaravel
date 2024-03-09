<nav id="menu">
					<header class="major">
						<h2>МЕНЮ</h2>
					</header>
					<ul>
					<li><a href="{{route('home')}}">Главная страница</a></li>
					<li>
							<span class="opener">Наши Компании</span>
							<ul>
								<li><a href="{{route('organizations.index'    )}}">ООО ИжПЗ</a></li>
								<li><a href="{{route('organizations.show', '1')}}">ООО ИжПЗ-Механика</a></li>
								<li><a href="{{route('organizations.show', '2')}}">ООО ИжПЗ-Связь</a></li>
								<li><a href="{{route('organizations.show', '3')}}">ООО ИжПЗ-Фотон</a></li>
								<li><a href="{{route('organizations.show', '4')}}">ООО ИжПЗ-Телеком</a></li>
								<li><a href="{{route('organizations.show', '5')}}">ООО ИжПЗ-Тестирование</a></li>
							</ul>
						</li>
						@guest('web')
						<li>
							<span class="opener">Заказ продукции</span>
							<ul>
								<li><a href="{{route('customer.login')}}">Заказ</a></li>
								<li><a href="#">Состояние заказа</a></li>							
							</ul>
						</li>
						@endguest
						@auth('web')
						<li>
							<span class="opener">Этапы выполнения заказа</span>
							<ul>
								<li><a href="{{route('ordersAll')}}">Заказы</a></li>
								<li><a href="#">Номенклатура</a></li>
								<li><a href="#">Ценообразование</a></li>
								<li><a href="#">Договор</a></li>
								<li><a href="#">Отгрузка</a></li>
							</ul>
						</li>
						@endauth						
						<li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
						
					</ul>
				</nav>