<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ScrapingCommand;
use Illuminate\Http\Request;

class ScrapingCommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      return view("scrapings.index",["scrapings"=>ScrapingCommand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $scraping = new ScrapingCommand();
      return view("scrapings.create",["scraping"=>$scraping]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $scraping = new ScrapingCommand();
      $scraping->name = $request->name;
      $scraping->cmd = $request->cmd;
      $scraping->cron1 = $request->cron1;
      $scraping->cron2 = $request->cron2;
      $scraping->cron3 = $request->cron3;
      $scraping->cron4 = $request->cron4;
      $scraping->cron5 = $request->cron5;
      $scraping->flg = $request->flg;
      $scraping->save();
      return redirect(route("scrapingCommand.edit",$scraping->id))->with("flash_message","保存しました");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScrapingCommand  $scrapingCommand
     * @return \Illuminate\Http\Response
     */
    public function show(ScrapingCommand $scrapingCommand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScrapingCommand  $scrapingCommand
     * @return \Illuminate\Http\Response
     */
    public function edit(ScrapingCommand $scrapingCommand)
    {
      return view("scrapings.edit",["scraping"=>$scrapingCommand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScrapingCommand  $scrapingCommand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScrapingCommand $scrapingCommand)
    {
      $scrapingCommand->name = $request->name;
      $scrapingCommand->cmd = $request->cmd;
      $scrapingCommand->cron1 = $request->cron1;
      $scrapingCommand->cron2 = $request->cron2;
      $scrapingCommand->cron3 = $request->cron3;
      $scrapingCommand->cron4 = $request->cron4;
      $scrapingCommand->cron5 = $request->cron5;
      $scrapingCommand->flg = $request->flg;
      $scrapingCommand->save();
      return redirect(route("scrapingCommand.edit",$scrapingCommand->id))->with("flash_message","保存しました");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScrapingCommand  $scrapingCommand
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScrapingCommand $scrapingCommand)
    {
        //
    }
}
