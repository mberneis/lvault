@extends('layouts.default')

@section('page')

    <div class="ui form" id="get_password">
        <div class="field">
            <label for="">{{ __('vault.form.decrypt_password_label') }}</label>
            <input type="text" name="decrypt_password" id="decrypt_password" placeholder="{{ __('vault.form.decrypt_password_placeholder') }}">
        </div>
        <div class="field">
            <button class="ui right labeled button icon primary" id="display_message">
                {{ __('vault.form.decrypt_button') }}
                <i class="eye icon"></i>
            </button>
        </div>
        <div class="ui error message">
            <i class="close icon"></i>
            <div class="content">
                <div class="header">
                    {{ __('vault.incorrect_password_title') }}
                </div>
                <p>{{ __('vault.incorrect_password_text')}}</p>
            </div>
        </div>
    </div>
    <h4 class="ui header">{{ __('vault.form.secret_text_label') }} </h4>
    <div class="ui secondary segment" id="view_body">
        <!-- Loader -->
        <div class="ui dimmer">
            <div class="ui text loader">{{ __('vault.loader_text') }}</div>
        </div>
        <span>{{ trim($encrypted_text) }}</span>
    </div>

@stop
