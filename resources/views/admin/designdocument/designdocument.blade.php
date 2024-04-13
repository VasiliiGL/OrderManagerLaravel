<section>
					<header class="major">
                  
                    <a href="{{route('admin.designdocument.create')}}" >Добавить новый документ</a>
				
					</header>

                    <table>
                        <caption>Конструкторские документы </caption>
                            <tr><th> Заказчик </th><th> Номер заказа </th> <th>Описание</th><th>Изготовитель</th>
                                @foreach($designdocuments as $document)
                                    <tr> <th>{!! $document->designation !!}</th> <th> {{$document->name}}</a> </th> <th>{!! $document->type !!}</th>
                                    <td>
                                        <form action="{{ route('admin.designdocument.destroy', $document->id) }}" method="POST">
                                        <a href="{{route( 'admin.designdocument.edit', $document->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                                    @endforeach
			        </table>
                    <div > {{$designdocuments->links()}}  </div> 
					<ul class="actions">
                        <li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
</section>