<?php
namespace Icicle\Concurrent;

/**
 * Interface for all types of execution contexts.
 */
interface ContextInterface extends SynchronizableInterface, ChannelInterface
{
    /**
     * Checks if the context is running.
     *
     * @return bool True if the context is running, otherwise false.
     */
    public function isRunning();

    /**
     * Starts the context execution.
     */
    public function start();

    /**
     * Immediately kills the context.
     */
    public function kill();

    /**
     * Gets a promise that resolves when the context ends and joins with the
     * parent context.
     *
     * @return \Icicle\Promise\PromiseInterface Promise that is resolved when the context finishes.
     */
    public function join();
}
