
{{ Form::open(array('route' => 'posts.store', 'id' => 'postsform')) }}
    <ul>
        <li>
            <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
            {{ Form::text('name', '', array('class' => 'span4', 'placeholder' => 'Name')) }}
            </div>
        </li>

        <li>
            <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
            {{ Form::text('email', '', array('class' => 'span4', 'placeholder' => 'Email')) }}
            </div>
        </li>

        <li>
            <div class="input-prepend"><span class="add-on"><i class="icon-calendar"></i></span>
            {{ Form::text('date', '', array('class' => 'span4', 'placeholder' => 'Date')) }}
            </div>
        </li>

        <li>
            <div class="input-prepend"><span class="add-on"><i class="icon-key"></i></span>
            {{ Form::text('room', '', array('class' => 'span4', 'placeholder' => 'Room')) }}
            </div>
        </li>

        <li>
            {{ Form::textarea('body', '', array('class' => 'span5', 'placeholder' => 'Review')) }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} <a href="{{url('posts')}}" class="btn btn-danger">Cancel</a>
        </li>
    </ul>
{{ Form::close() }}
