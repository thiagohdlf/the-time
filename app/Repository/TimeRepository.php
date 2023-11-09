<?php

    namespace App\Repository;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Time;
    use Carbon\Carbon;

    class TimeRepository extends Model
    {
        private $data;

        public function __construct(Time $data)
        {
            $this->data = $data;
        }

        public function datetime()
        {
            $date = Carbon::now();
            return $date;
        }

        public function getAll()
        {
            $data = $this->data->paginate();
        }

        public function storeAll(array $request)
        {
            $dado = $request;
            $time = $this->data->create($dado);
        }
    }
