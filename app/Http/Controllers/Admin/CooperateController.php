<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCooperateRequest;
use App\Http\Requests\Admin\UpdateCooperateRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\CooperateRepository;
use Illuminate\Http\Request;
use Flash;

class CooperateController extends AppBaseController
{
    /** @var CooperateRepository $cooperateRepository*/
    private $cooperateRepository;

    public function __construct(CooperateRepository $cooperateRepo)
    {
        $this->cooperateRepository = $cooperateRepo;
    }

    /**
     * Display a listing of the Cooperate.
     */
    public function index(Request $request)
    {
        $cooperates = $this->cooperateRepository->paginate(10);

        return view('admin.cooperates.index')
            ->with('cooperates', $cooperates);
    }

    /**
     * Show the form for creating a new Cooperate.
     */
    public function create()
    {
        return view('admin.cooperates.create');
    }

    /**
     * Store a newly created Cooperate in storage.
     */
    public function store(CreateCooperateRequest $request)
    {
        $input = $request->all();

        $cooperate = $this->cooperateRepository->create($input);

        Flash::success('Cooperate saved successfully.');

        return redirect(route('admin.cooperates.index'));
    }

    /**
     * Display the specified Cooperate.
     */
    public function show($id)
    {
        $cooperate = $this->cooperateRepository->find($id);

        if (empty($cooperate)) {
            Flash::error('Cooperate not found');

            return redirect(route('admin.cooperates.index'));
        }

        return view('admin.cooperates.show')->with('cooperate', $cooperate);
    }

    /**
     * Show the form for editing the specified Cooperate.
     */
    public function edit($id)
    {
        $cooperate = $this->cooperateRepository->find($id);

        if (empty($cooperate)) {
            Flash::error('Cooperate not found');

            return redirect(route('admin.cooperates.index'));
        }

        return view('admin.cooperates.edit')->with('cooperate', $cooperate);
    }

    /**
     * Update the specified Cooperate in storage.
     */
    public function update($id, UpdateCooperateRequest $request)
    {
        $cooperate = $this->cooperateRepository->find($id);

        if (empty($cooperate)) {
            Flash::error('Cooperate not found');

            return redirect(route('admin.cooperates.index'));
        }

        $cooperate = $this->cooperateRepository->update($request->all(), $id);

        Flash::success('Cooperate updated successfully.');

        return redirect(route('admin.cooperates.index'));
    }

    /**
     * Remove the specified Cooperate from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cooperate = $this->cooperateRepository->find($id);

        if (empty($cooperate)) {
            Flash::error('Cooperate not found');

            return redirect(route('admin.cooperates.index'));
        }

        $this->cooperateRepository->delete($id);

        Flash::success('Cooperate deleted successfully.');

        return redirect(route('admin.cooperates.index'));
    }
}
