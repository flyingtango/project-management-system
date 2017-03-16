@extends('emails.layouts.master')

@section('title')
    您是项目{{ $project_name }}的成员了 .
@stop

@section('content')
    您被邀请成为项目{{ $project_name }}的一员。您可以添加删除任务，新增FTP等。
    <br><br>
    <a style="text-decoration: none; background-color: #74cd9e;color: #fff;border-radius: 4px;display: inline-block;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: 400;line-height:1.42857143;text-align: center;white-space: nowrap;" target="_blank" href="{{ $project_url }}">Go To Project</a>
@stop
