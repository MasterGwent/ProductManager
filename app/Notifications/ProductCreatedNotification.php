<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Product;

class ProductCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return string[]
     */
    public function via(): array
    {
        return ['mail'];
    }

    /**
     * @return MailMessage
     */
    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->subject('Новый продукт создан')
            ->line('Продукт с названием: ' . $this->product->name . ' был создан.');
    }
}
