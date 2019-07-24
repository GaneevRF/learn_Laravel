@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab_content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" value="{{ $item->title }}"
                                    id="title"
                                    name="title"
                                    class="form-control"
                                    minlength="3"
                                    required>
                        </div>

                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <input type="text" value="{{ $item->slug }}"
                                   id="slug"
                                   name="slug"
                                   class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Родитель</label>
                            <select type="text" value="{{ $item->parent_id }}"
                                   id="parent_id"
                                   name="parent_id"
                                   class="form-control"
                                   placeholder="Выберите категорию"
                                   required>
                                @foreach($categotyList as $categoryOption)
                                    <option value="{{ $categoryOption->id }}"
                                            @if($categoryOption->id == $categoryOption->parent_id) selected @endif>
                                        {{ $categoryOption->id }} . {{ $categoryOption->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="slug">Идентификатор</label>
                            <textarea id="description"
                                   name="description"
                                   class="form-control"
                                      rows="3">
                                {{ $item->description }}
                            </textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>