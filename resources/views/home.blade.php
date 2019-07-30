@include('layout.header')

<div class="header">
    <div class="content">
        <div id="message">
            <h3>The Currency Exchange</h3>
            <p>
                View all recent currency exchange rates below or navigate to the admin panel to add some of your own!
            </p>
            <button onclick="window.location.href = '/admin';" type="button" class="blue-btn">Admin Page</button>
        </div>
    </div>
</div>

<table class="exchange-table">
    <thead>
        <tr>
            <th>Base</th>
            <th>Target</th>
            <th>Rate</th>
            <th class="complex-col">Date</th>
            <th class="complex-col">Created</th>
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
            </tr>
        @endforeach
    </tbody>
</table>




@include('layout.footer')