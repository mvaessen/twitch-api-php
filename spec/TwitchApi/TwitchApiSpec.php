<?php

namespace spec\TwitchApi;

use TwitchApi\RequestGenerator;
use TwitchApi\HelixGuzzleClient;
use TwitchApi\Auth\OauthApi;
use TwitchApi\Resources\AdsApi;
use TwitchApi\Resources\AnalyticsApi;
use TwitchApi\Resources\BitsApi;
use TwitchApi\Resources\ChannelPointsApi;
use TwitchApi\Resources\ChannelsApi;
use TwitchApi\Resources\EntitlementsApi;
use TwitchApi\Resources\EventSubApi;
use TwitchApi\Resources\GamesApi;
use TwitchApi\Resources\ModerationApi;
use TwitchApi\Resources\PollsApi;
use TwitchApi\Resources\PredictionsApi;
use TwitchApi\Resources\ScheduleApi;
use TwitchApi\Resources\StreamsApi;
use TwitchApi\Resources\SubscriptionsApi;
use TwitchApi\Resources\TagsApi;
use TwitchApi\Resources\TeamsApi;
use TwitchApi\Resources\UsersApi;
use TwitchApi\Resources\VideosApi;
use TwitchApi\Resources\WebhooksApi;
use TwitchApi\Webhooks\WebhooksSubscriptionApi;
use PhpSpec\ObjectBehavior;

class TwitchApiSpec extends ObjectBehavior
{
    function let(HelixGuzzleClient $guzzleClient)
    {
        $this->beConstructedWith($guzzleClient, 'client-id', 'client-secret');
    }

    function it_should_provide_oauth_api()
    {
        $this->getOauthApi()->shouldBeAnInstanceOf(OauthApi::class);
    }

    function it_should_provide_ads_api()
    {
        $this->getAdsApi()->shouldBeAnInstanceOf(AdsApi::class);
    }

    function it_should_provide_analytics_api()
    {
        $this->getAnalyticsApi()->shouldBeAnInstanceOf(AnalyticsApi::class);
    }

    function it_should_provide_bits_api()
    {
        $this->getBitsApi()->shouldBeAnInstanceOf(BitsApi::class);
    }

    function it_should_provide_channel_points_api()
    {
        $this->getChannelPointsApi()->shouldBeAnInstanceOf(ChannelPointsApi::class);
    }

    function it_should_provide_channels_api()
    {
        $this->getChannelsApi()->shouldBeAnInstanceOf(ChannelsApi::class);
    }

    function it_should_provide_entitlements_api()
    {
        $this->getEntitlementsApi()->shouldBeAnInstanceOf(EntitlementsApi::class);
    }

    function it_should_provide_event_sub_api()
    {
        $this->getEventSubApi()->shouldBeAnInstanceOf(EventSubApi::class);
    }

    function it_should_provide_games_api()
    {
        $this->getGamesApi()->shouldBeAnInstanceOf(GamesApi::class);
    }

    function it_should_provide_polls_api()
    {
        $this->getPollsApi()->shouldBeAnInstanceOf(PollsApi::class);
    }

    function it_should_provide_predictions_api()
    {
        $this->getPredictionsApi()->shouldBeAnInstanceOf(PredictionsApi::class);
    }

    function it_should_provide_schedule_api()
    {
        $this->getScheduleApi()->shouldBeAnInstanceOf(ScheduleApi::class);
    }

    function it_should_provide_subscriptions_api()
    {
        $this->getSubscriptionsApi()->shouldBeAnInstanceOf(SubscriptionsApi::class);
    }

    function it_should_provide_streams_api()
    {
        $this->getStreamsApi()->shouldBeAnInstanceOf(StreamsApi::class);
    }

    function it_should_provide_tags_api()
    {
        $this->getTagsApi()->shouldBeAnInstanceOf(TagsApi::class);
    }

    function it_should_provide_teams_api()
    {
        $this->getTeamsApi()->shouldBeAnInstanceOf(TeamsApi::class);
    }

    function it_should_provide_users_api()
    {
        $this->getUsersApi()->shouldBeAnInstanceOf(UsersApi::class);
    }

    function it_should_provide_videos_api()
    {
        $this->getVideosApi()->shouldBeAnInstanceOf(VideosApi::class);
    }

    function it_should_provide_webhooks_api()
    {
        $this->getWebhooksApi()->shouldBeAnInstanceOf(WebhooksApi::class);
    }

    function it_should_provide_webhooks_subscription_api()
    {
        $this->getWebhooksSubscriptionApi()->shouldBeAnInstanceOf(WebhooksSubscriptionApi::class);
    }
}
