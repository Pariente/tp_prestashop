
<p>
  Yolo
</p>
<ul>
  {foreach from=$looks item=look}
    <li>
      <img class="replace-2x img-responsive" src="{$link->getImageLink($look->link_rewrite, $look->id_image, 'small_default')}" />
      {$look->name}
    </li>
  {/foreach}
</ul>