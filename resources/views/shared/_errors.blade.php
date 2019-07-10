<?php
/**
 * Created by PhpStorm.
 * User: xuejiasong
 * Date: 2019/7/10
 * Time: 21:01
 */

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif