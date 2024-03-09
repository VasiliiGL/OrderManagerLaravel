                <header id="header">
					<a href="{{route('home')}}" class="logo"><strong>Группа компаний</strong> ИжПЗ</a>
					
					<ul class="icons">
						<li><a href="#VK" onclick="window.open('https://vk.com/share.php?url='+ window.location.href +'')" class="icon brands fa-vk"><span class="label">ВК</span></a></li>
						<li><a href="https://t.me/79124564606" class="icon brands fa-telegram"><span class="label">Телеграмм</span></a></li>
						<li><a href="https://www.whatsapp.com/" class="icon brands fa-whatsapp"><span class="label">whatsapp</span></a></li>
						<li><a href="https://www.viber.com/ru/" class="icon brands fa-viber"><span class="label">mail</span></a></li>
						<li><a href="mailto:mail@example.com" class="icon brands fa-google"><span class="label">mail</span></a></li>
						<div class="sm:mb-0 self-center">
							@auth('web')
								<a href="{{route('logout')}}" 
								class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
							@endauth

							@guest('web')
							<a href="{{route('login')}}" 
								class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
							@endguest
					
						</div>
					</ul>
					
				</header>