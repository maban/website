<aside class="s-info">
  <? if($p->notes()->isNotEmpty()): ?>
    <? foreach($p->notes()->yaml() as $note): ?>
      <p><?= $note ?></p>
    <? endforeach ?>
  <? endif ?>
  <? if($p->info()->isNotEmpty()): ?>
    <dl>
    <? foreach($p->info()->yaml() as $info): ?>
      <dt><?= smartypants($info['term']) ?></dt>
      <? if(isset($info['desc'])): ?>
      <dd><?= smartypants($info['desc']) ?></dd>
      <? endif ?>
    <? endforeach ?>
    </dl>
  <? endif ?>
</aside>
