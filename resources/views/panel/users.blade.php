<?php use App\Models\User; ?>

@extends('layouts.sidebar')

@section('content')

<style>#cs{cursor: pointer;}.delete{color:transparent; background-color:tomato; border-radius:5px; padding:8px 12px; cursor: pointer;}.delete:hover{color:transparent;background-color:#f13d1d;}html,body{max-width:100%;overflow-x:hidden;}.shorten{cursor:help;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:150px;}</style>

<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">   


      <div class="col-lg-12">
          <div class="card rounded">
             <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">  
  
                      <section class="text-gray-400">
                        <h2 class="mb-4 card-header"><i class="bi bi-person"> {{__('messages.Manage Users')}}</i></h2>
                        <div class="card-body p-0 p-md-3">
                
                        <form action="{{ route('searchUser') }}" method="post">
                        @csrf
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="input-group mb-3">
                                <input type="text" name="name" placeholder="{{__('messages.Search user')}}" class="form-control">
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                        {{__('messages.Users:')}}
                        <a href="{{ url('') }}/admin/users/all">All</a> - 
                        <a href="{{ url('') }}/admin/users/user">User</a> - 
                        <a href="{{ url('') }}/admin/users/vip">Vip</a> - 
                        <a href="{{ url('') }}/admin/users/admin">Admin</a> 
                
                        <div class="row"><div class="table-responsive">
                          <table id="sortable" class="table table-stripped">
                            <thead>
                              <tr>
                                <th id="cs" scope="col" data-sort="id" data-order="asc">{{__('messages.ID')}}</th>
                                <th id="cs" scope="col" data-sort="name" data-order="asc">{{__('messages.Name')}}</th>
                                <th id="cs" scope="col" data-sort="email" data-order="asc">{{__('messages.E-Mail')}}</th>
                                <th id="cs" scope="col" data-sort="page" data-order="asc">{{__('messages.Page')}}</th>
                                <th id="cs" scope="col" data-sort="role" data-order="asc">{{__('messages.Role')}}</th>              
                                <th id="cs" scope="col" data-sort="links" data-order="asc">{{__('messages.Links')}}</th>
                                <th id="cs" scope="col" data-sort="clicks" data-order="asc">{{__('messages.Clicks')}}</th>
                                <th id="cs" scope="col" data-sort="created" data-order="asc">{{__('messages.Created at')}}</th>
                                <th id="cs" scope="col" data-sort="last" data-order="asc">{{__('messages.Last seen')}}</th>
                                @if(env('REGISTER_AUTH') !== 'auth')<th id="cs" scope="col">{{__('messages.E-Mail')}}</th>@endif
                                <th id="cs" scope="col" data-sort="block" data-order="asc">{{__('messages.Status')}}</th>
                                <th scope="col" data-sortable="false">{{__('messages.Action')}}</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            @php
                            $dateFormat = __('messages.date.format');
                  
                            $date = date($dateFormat, strtotime($user->created_at));
                            if(!isset($user->created_at)){$date = __('messages.N/A');}
                  
                            $lastSeen = $user->updated_at;
                            $lastSeenDate = date($dateFormat, strtotime($lastSeen));
                            $timezone = new DateTimeZone(date_default_timezone_get()); 
                            $datetime = new DateTime($lastSeen, $timezone);
                            $now = new DateTime(null, $timezone);
                            $interval = $now->diff($datetime);
                            $daysAgo = $interval->days." ".__('messages.days ago');
                            if($interval->days == 1) $daysAgo = __('messages.1 day ago');
                            if($interval->days == 0) $daysAgo = __('messages.Today');
                            if ($interval->days >= 365) {
                            $yearsAgo = floor($interval->days / 365);
                            if ($yearsAgo == 1) {
                                $daysAgo = __('messages.1 year ago');
                            } else {
                                $daysAgo = $yearsAgo . __('messages.years ago');
                            }}
                            @endphp
                              <tr>
                                <td data-id>{{ $user->id }}</td>
                                <td class="shorten" title="{{ $user->name }}" data-name> {{ $user->name }} </td>
                                <td class="shorten" title="{{ $user->email }}" data-email> {{ $user->email }} </td>
                                <td class="shorten" title="{{ $user->littlelink_name }}" data-page>@if(isset($user->littlelink_name))<a href="{{ url('') }}/@<?= $user->littlelink_name ?>" target="_blank" class="text-info"><i class="bi bi-box-arrow-up-right"></i>&nbsp; {{ $user->littlelink_name }} </a>@else {{__('messages.N/A')}} @endif</td>
                                <td data-role>{{ $user->role }}</td>
                                <td data-links>{{$user->links}}</td>
                                <td data-clicks>{{$user->clicks}}</td>
                                <td data-created>{{$date}}</td>
                                <td class="shorten" data-last title="{{ $lastSeenDate }}">{{$daysAgo}}</td>
                                @if(env('REGISTER_AUTH') !== 'auth')
                                <td>@if($user->role == 'admin' and $user->email_verified_at != '')<center>-</center> @else
                                <a href="{{ route('verifyUser', ['verify' => '-' . $user->email_verified_at, 'id' => $user->id] ) }}" class="text-danger">@if($user->email_verified_at == '')<span class="badge bg-danger">{{__('messages.Pending')}}</span>@else<span class="badge bg-success">{{__('messages.Verified')}}</span></a>@endif</td>
                                @endif
                                @endif
                                <td>@if($user->role == 'admin' and $user->id == 1)<center>-</center>@else<a href="{{ route('blockUser', ['block' => $user->block, 'id' => $user->id] ) }}">@if($user->block == 'yes') <span class="badge bg-danger">{{__('messages.Pending')}}</span> @elseif($user->block == 'no') <span class="badge bg-success">{{__('messages.Approved')}}</span> @endif</a>@endif</td>
                                <td>
                                  @if($user->role == 'admin' and $user->id == 1)<center>-</center>
                                  @else
                                  <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="{{__('messages.tt.All links')}}" href="{{ route('showLinksUser', $user->id ) }}" aria-label="All links" data-bs-original-title="All links">
                                       <span class="btn-inner">   
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>                                                               
                                       </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="{{__('messages.tt.Edit')}}" href="{{ route('editUser', $user->id ) }}" aria-label="Edit" data-bs-original-title="Edit">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-primary" style="@if(!$user->adminUser && Auth::user()->id !== $user->id && $user->block !== 'yes' && ($user->email_verified_at != '' || env('REGISTER_AUTH') == 'auth')) background:#3a57e8;border-color:#3a57e8; @else background:#6c757d;border-color:#6c757d; @endif" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="{{__('messages.tt.Impersonate')}}" @if(!$user->adminUser && Auth::user()->id !== $user->id && $user->block !== 'yes' && ($user->email_verified_at != '' || env('REGISTER_AUTH') == 'auth')) href="{{ route('authAsID', $user->id ) }}" @endif aria-label="Impersonate" data-bs-original-title="Impersonate">
                                      <span class="btn-inner">   
                                         <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59151 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.59151 20.8068C5.90151 20.8068 2.74951 20.2528 2.74951 18.0188C2.74951 15.7848 5.88051 15.2068 9.59151 15.2068Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.59157 12.0198C7.16957 12.0198 5.20557 10.0568 5.20557 7.63476C5.20557 5.21276 7.16957 3.24976 9.59157 3.24976C12.0126 3.24976 13.9766 5.21276 13.9766 7.63476C13.9856 10.0478 12.0356 12.0108 9.62257 12.0198H9.59157Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.4829 10.8815C18.0839 10.6565 19.3169 9.28253 19.3199 7.61953C19.3199 5.98053 18.1249 4.62053 16.5579 4.36353" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M18.5952 14.7322C20.1462 14.9632 21.2292 15.5072 21.2292 16.6272C21.2292 17.3982 20.7192 17.8982 19.8952 18.2112" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                         </svg>                                                               
                                      </span>
                                   </a>
                                    <a class="btn btn-sm btn-icon btn-danger confirmation" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="{{__('messages.tt.Delete')}}" href="{{ route('deleteUser', ['id' => $user->id] ) }}" aria-label="Delete" data-bs-original-title="Delete">
                                       <span class="btn-inner">
                                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                             <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                                    </a>
                                 </div>
                                  @endif
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div></div></div>
                        <a href="{{ url('') }}/admin/new-user">+ {{__('messages.Add new user')}}</a>
                
                              <script type="text/javascript">
                                var elems = document.getElementsByClassName('confirmation');
                                var confirmIt = function (e) {
                                    if (!confirm("{{__('messages.confirm.delete.user')}}")) e.preventDefault();
                                };
                                for (var i = 0, l = elems.length; i < l; i++) {
                                    elems[i].addEventListener('click', confirmIt, false);
                                }
                              </script>
                
                          </div>
                </section>
  
                    </div>
                </div>
             </div>
          </div>
       </div>


    </div>
  </div>

@push('sidebar-scripts')
<script>
  const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

  const comparer = (idx, asc) => (a, b) =>
    ((v1, v2) =>
      v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

  document.addEventListener('DOMContentLoaded', () => {
    // Find the sortable table and its headers
    const table = document.querySelector('#sortable.table.table-stripped');
    const headers = table.querySelectorAll('th[data-sort]');

    // Add caret icon to initial header element
    const initialHeader = table.querySelector('[data-order]');
    initialHeader.innerHTML = `${initialHeader.innerText} <i class="bi bi-caret-down-fill"></i>`;

    // Attach click event listener to all sortable headers
    headers.forEach(th => th.addEventListener('click', function() {
      // Get the clicked header's index, sort order, and sortable attribute
      const thIndex = Array.from(th.parentNode.children).indexOf(th);
      const isAscending = this.asc = !this.asc;
      const isSortable = th.getAttribute('data-sortable') !== 'false';

      // If the column is not sortable, do nothing
      if (!isSortable) {
        return;
      }

      // Remove caret icon and active class from all headers
      headers.forEach(h => {
        h.classList.remove('active');
        h.innerHTML = h.innerText;
      });

      // Add caret icon and active class to clicked header
      th.classList.add('active');
      th.innerHTML = `${th.innerText} ${isAscending ? '<i class="bi bi-caret-down-fill"></i>' : '<i class="bi bi-caret-up-fill"></i>'}`;

      // Sort the table rows based on the clicked header
      Array.from(table.querySelectorAll('tbody tr'))
        .sort(comparer(thIndex, isAscending))
        .forEach(tr => table.querySelector('tbody').appendChild(tr));
    }));
  });
</script>
@endpush

@endsection