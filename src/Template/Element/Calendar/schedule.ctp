<div class="card" id="schedule-<?= $schedule->id ?>">
  <div class="schedule-item <?= $schedule->active ?>">
    <div class="time-stamp">
        <?php
          $begin = new DateTime($schedule->begin);
          $end = new DateTime($schedule->end);
          echo $begin->format('H:i') .'<br />'. $end->format('H:i');
        ?>
    </div>
    <div class="content">
      <a href="<?= $this->Url->build([ "controller" => "Events", "action" => "view", $schedule->event->id]) ?>"><?= $schedule->event->label ?> <?= $schedule->ordering ?> </a>
      <?php foreach($schedule->calendars as $calendar): ?>
      <a href="<?= $this->Url->build([ "controller" => "Calendars", "action" => "view", $calendar->id]) ?>" class="bullet-item b-<?= $types[$calendar->type_id] ?>" title="<?= $calendar->name ?>"><?= $calendar->name ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
