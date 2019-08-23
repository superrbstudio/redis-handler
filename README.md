# SuperrbRedisHandlerBundle

Handler for using Redis with Symfony, Doctrine and Sessions

Storing sessions, application cache and doctrine cache in Redis can add some performance improvements, as well as centralising for multi server environments.

## Installation

### Step 1: Install the Bundle
```bash
composer require superrb/redis-handler
```
Add `Superrb\RedisHandlerBundle\SuperrbRedisHandlerBundle::class => ['all' => true],` to `config/bundles.php`

### Step 2: Add environment variables
```dotenv
###> superrb/redis-handler ###
SUPERRB_REDIS_URL=redis://127.0.0.1:6379
SUPERRB_REDIS_PREFIX=uniqueprefix_
###< superrb/redis-handler ###
```

## Configuration

### Session Handling

`config/packages/framework.yaml`

```yaml
# Set up sessions and cache
framework:
    session:
        handler_id: superrb_redis.session_handler
```

### Symfony Cache
`config/packages/cache.yaml`
```yaml
framework:
    cache:
        app: cache.adapter.redis
        system: cache.adapter.redis
        default_redis_provider: superrb_redis.service
```

### Doctrine Cache
`config/packages/doctrine.yaml`

```yaml
doctrine:
    orm:
        metadata_cache_driver:
            type: service
            id: superrb_redis.doctrine_cache
        result_cache_driver:
            type: service
            id: superrb_redis.doctrine_cache
        query_cache_driver:
            type: service
            id: superrb_redis.doctrine_cache
```

## Issues and Troubleshooting

All issues: tech@superrb.com
