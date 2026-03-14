<?php

namespace Raham\MyPackage;

use Illuminate\Console\Command;

class TestCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'raham:test';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $this->info('Hello, World!');
  }
}
