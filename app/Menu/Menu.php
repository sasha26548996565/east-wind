<?php

declare(strict_types=1);

namespace App\Menu;

use Closure;
use Traversable;
use Support\Traits\Makeable;
use Illuminate\Support\Collection;

final class Menu implements \IteratorAggregate
{
    use Makeable;

    private array $items = [];

    public function __construct(MenuItem ...$items)
    {
        $this->items = $items;
    }

    public function getItems(): Collection
    {
        return Collection::make($this->items);
    }

    public function addItem(MenuItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }

    public function addItemIf(bool|Closure $condition, MenuItem $item): self
    {
        if (is_callable($condition) ? $condition() : $condition) {
            $this->addItem($item);
        }

        return $this;
    }

    public function removeItem(MenuItem $item): self
    {
        $this->items = $this->getItems()
            ->filter(fn (MenuItem $currentItem) => $currentItem != $item)
            ->toArray();

        return $this;
    }

    public function removeItemIf(bool|Closure $condition,  MenuItem $item): self
    {
        if (is_callable($condition) ? $condition() : $condition) {
            $this->removeItem($item);
        }

        return $this;
    }

    public function removeByLink(string $link): self
    {
        $this->items = $this->getItems()
            ->filter(fn(MenuItem $currentItem) => $currentItem->getLink() != $link)
            ->toArray();

        return $this;
    }

    public function getCount(): int
    {
        return count($this->items);
    }

    public function getIterator(): Traversable
    {
        return $this->getItems();
    }
}
