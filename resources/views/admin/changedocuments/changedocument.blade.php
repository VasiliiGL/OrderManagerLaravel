<section>
					<header class="major">
                    <h2>Страница администратора - Учет изменении документации</h2>
                    <a href="{{route('admin.changedocument.create')}}" >Добавить новое изменение документа</a>
                
                   
				
					</header>

                    <table>
                    <caption>Перечень документации</caption>
                    <tr><th> Обозначение </th><th> Наименование </th> <th>Тип</th><th>Номер изменения</th>
                    @foreach($changedocuments as $changedocument)
                    <tr> <th>{!! $changedocument->designdocument->designation !!}</th>  <th>{!! $changedocument->designdocument->name !!}</th> <th>{!! $changedocument->designdocument->type !!}</th> <th>  <a href="#">{{$changedocument->number}}</a> </th> 
                                    <td>
                                        <form action="{{ route('admin.changedocument.destroy', $changedocument->id) }}" method="POST">
                                        <a href="{{route( 'admin.changedocument.edit', $changedocument->id)}}" class="button">Изменить</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" >Удалить</button>
                                        </form>
                                    </td>
                    @endforeach
                       
			        </table>
                    <div > {{$changedocuments->links()}}  </div> 
					<ul class="actions">
						<li><a href="{{route('admin.management')}}" class="button"> Назад</a></li>
					</ul>
