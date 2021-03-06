<?php

declare(strict_types=1);
/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Message\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Message\Service\MailInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Mail implements MailInterface
{
    /**
     * 发送邮件函数.
     *
     * @Validation(
     *     @Email(0,{message : 'to字段不是一个有效邮箱格式'})
     * )
     *
     * @param array  $messageMail 短信消息内容
     * @param int    $messageInfo ['message_id'] 消息ID
     * @param int    $messageInfo ['receiver_id'] 接收者ID
     * @param string $to          收件人
     * @param string $subject     邮件标题
     * @param string $message     邮件内容
     * @param array  $attachments 附件数组，存地址
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({{"message_id":1,"receiver_id":2},"to":"liangxinyi@eelly.net","subject":"消息标题"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-5
     */
    public function sendMail(array $messageMail, string $to, string $subject, string $message, array $attachments = []): bool
    {
        return EellyClient::request('message/mail', __FUNCTION__, true, $messageMail, $to, $subject, $message, $attachments);
    }

    /**
     * 发送邮件函数.
     *
     * @Validation(
     *     @Email(0,{message : 'to字段不是一个有效邮箱格式'})
     * )
     *
     * @param array  $messageMail 短信消息内容
     * @param int    $messageInfo ['message_id'] 消息ID
     * @param int    $messageInfo ['receiver_id'] 接收者ID
     * @param string $to          收件人
     * @param string $subject     邮件标题
     * @param string $message     邮件内容
     * @param array  $attachments 附件数组，存地址
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return bool
     * @requestExample({{"message_id":1,"receiver_id":2},"to":"liangxinyi@eelly.net","subject":"消息标题"})
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-5
     */
    public function sendMailAsync(array $messageMail, string $to, string $subject, string $message, array $attachments = [])
    {
        return EellyClient::request('message/mail', __FUNCTION__, false, $messageMail, $to, $subject, $message, $attachments);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}