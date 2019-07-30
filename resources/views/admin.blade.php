@include('layout.header')

<div class="select-bar">
    {{ Form::open(array('url' => 'entries')) }}
    <div class="drop-down">
        <select name="base">
            <option value="" disabled selected>Select a base currency</option>
            <option value="AUD">AUD</option>
            <option value="BGN">BGN</option>
            <option value="BRL">BRL</option>
            <option value="CAD">CAD</option>
            <option value="CHF">CHF</option>
            <option value="CNY">CNY</option>
            <option value="CZK">CZK</option>
            <option value="DKK">DKK</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="HKD">HKD</option>
            <option value="HRK">HRK</option>
            <option value="HUF">HUF</option>
            <option value="IDR">IDR</option>
            <option value="ILS">ILS</option>
            <option value="INR">INR</option>
            <option value="ISK">ISK</option>
            <option value="JPY">JPY</option>
            <option value="KRW">KRW</option>
            <option value="MXN">MXN</option>
            <option value="MYR">MYR</option>
            <option value="NOK">NOK</option>
            <option value="NZD">NZD</option>
            <option value="PHP">PHP</option>
            <option value="PLN">PLN</option>
            <option value="RON">RON</option>
            <option value="RUB">RUB</option>
            <option value="SEK">SEK</option>
            <option value="SGD">SGD</option>
            <option value="THB">THB</option>
            <option value="TRY">TRY</option>
            <option value="USD">USD</option>
            <option value="ZAR">ZAR</option>
        </select>
    </div>
    <div class="drop-down">
        <select name="target">
            <option value="" disabled selected>Select a target currency</option>
            <option value="AUD">AUD</option>
            <option value="BGN">BGN</option>
            <option value="BRL">BRL</option>
            <option value="CAD">CAD</option>
            <option value="CHF">CHF</option>
            <option value="CNY">CNY</option>
            <option value="CZK">CZK</option>
            <option value="DKK">DKK</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="HKD">HKD</option>
            <option value="HRK">HRK</option>
            <option value="HUF">HUF</option>
            <option value="IDR">IDR</option>
            <option value="ILS">ILS</option>
            <option value="INR">INR</option>
            <option value="ISK">ISK</option>
            <option value="JPY">JPY</option>
            <option value="KRW">KRW</option>
            <option value="MXN">MXN</option>
            <option value="MYR">MYR</option>
            <option value="NOK">NOK</option>
            <option value="NZD">NZD</option>
            <option value="PHP">PHP</option>
            <option value="PLN">PLN</option>
            <option value="RON">RON</option>
            <option value="RUB">RUB</option>
            <option value="SEK">SEK</option>
            <option value="SGD">SGD</option>
            <option value="THB">THB</option>
            <option value="TRY">TRY</option>
            <option value="USD">USD</option>
            <option value="ZAR">ZAR</option>
        </select>
    </div>

    {{ Form::submit('Convert!', array('class' => 'add-btn')) }}
    {{ Form::close() }}
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Base</th>
            <th>Target</th>
            <th>Rate</th>
            <th class="complex-col">Date</th>
            <th class="complex-col">Created</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($entries->sortByDesc('created_at') as $key => $entry)
            <tr>
                <td>{{$entry->base}}</td>
                <td>{{$entry->target}}</td>
                <td>{{$entry->rate}}</td>
                <td class="complex-col">{{$entry->date}}</td>
                <td class="complex-col">{{$entry->created_at}}</td>
                <td>
                {{ Form::open(array('url' => 'entries/' . $entry->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Remove', array('class' => 'remove-btn' )) }}
                {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>




@include('layout.footer')