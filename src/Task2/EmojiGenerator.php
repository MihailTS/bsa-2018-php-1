<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    private $emojis = ['🚀', '🚃', '🚄', '🚅', '🚇'];

    public function generate(): \Generator
    {
        foreach($this->emojis as $emoji){
            yield $emoji;
        }
    }
}