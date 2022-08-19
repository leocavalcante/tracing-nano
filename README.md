# 🔭 Tracing Nano

Proof of concept on adding observability features (tracing and metrics) to a Nano microservice (using existing Hyperf components 🚀).

Run Prometheus, Grafana and Jaeger using Docker:
```shell
docker compose up
```
> Then link Prometheus as a data source in Grafana using service's name as host (i.e.: `http://prometheus:9090`).

- Go to http://localhost:3000 to explore metrics using Grafana.
- Go to http://localhost:16686 to explore traces using the Jaeger UI.

Run Nano with:
```shell
php app.php start
```

- Go to http://localhost:9501 to make a test request.
- Go to http://localhost:9502/metrics you can see some Prometheus data.

Thanks to [@huangdijia](https://github.com/huangdijia) for the help with AOP + Nano.
