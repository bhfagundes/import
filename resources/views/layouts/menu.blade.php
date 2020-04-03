<li class="{{ Request::is('tickets*') ? 'active' : '' }}">
    <a href="{!! route('tickets.index') !!}"><i class="fa fa-edit"></i><span>Tickets</span></a>
</li>



<li class="{{ Request::is('obrigacaos*') ? 'active' : '' }}">
    <a href="{!! route('obrigacaos.index') !!}"><i class="fa fa-edit"></i><span>Obrigacaos</span></a>
</li>

