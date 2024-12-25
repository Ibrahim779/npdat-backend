<div class="card">
    <div class="card-header pb-0">
        <h6>@lang('main.latest_articles')</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @lang('main.article')
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            @lang('main.by')
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            @lang('main.created_at')
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            @lang('main.status')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lastArticles as $article)
                    <tr>
                        <td>
                            <div class="d-flex px-3 py-1">
                                <div>
                                    <img src="{{ $article->img }}" class="avatar mx-3" alt="image">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}">
                                        <h6 class="mb-0 text-sm">{{ $article->trim_title }}</h6>
                                    </a>
                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                            class="text-success">{{ $article->views_count }}</span>
                                        @lang('main.views')</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">{{ $article->admin->name }}</p>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">{{ $article->created_at }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            @include(
                            'dashboard.components.status-badge',
                            ['modelStatus' => $article->status, 'status' => $article->getStatus()]
                            )
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>