<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotes;
use App\freelancer;
use App\job;


class homecontroller extends Controller
{
    public function index(Request $req){
    	//echo "asd";
    	//$req->session()->flush();
		return view('home.index');
	}

	public function search(Request $req)
	{
		return redirect()->route('home.search');
	}
	public function searchjob(Request $req)
	{
		return redirect()->route('home.searchjob');
	}
	public function search1(Request $req){

		//echo "Done";
		//$req->session()->put('search', $req->search);
		$search = $req->search;
		$type = $req->type;
		if ($type == "job") {
			$user = job::where('title', $search)->get();
			return view('home.searchjob',['job'=>$user]);
		}
		else{
			$user = freelancer::where('username', $search)->get();
			return view('home.search',['freelancer'=>$user]);
		}
		//echo "Done";
	}

	public function fl(Request $req){
		return view('home.fl');
	}

	public function job(Request $req){
		return view('home.job');
	}

	//public function searchsupport(Request $req)
	//{
	//	return view('home.search');
	//}

	public function b1(Request $req){
		
		return view('quotes.webMobSofDevQuotes');
	}
	public function b1support(Request $req){
		$quotes = new quotes();

		$quotes->sector = "webMobSofDevQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b2(Request $req){
		
		return view('quotes.designCreativeWorkQuotes');
	}
	public function b2support(Request $req){
		$quotes = new quotes();

		$quotes->sector = "designCreativeWorkQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b3(Request $req){
		return view('quotes.writingQuotes');
	}
	public function b3support(Request $req){
		$quotes = new quotes();

		$quotes->sector = "writingQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b4(Request $req){
		return view('quotes.salesMarketingQuotes');
	}
	public function b4support(Request $req){
		$quotes = new quotes();

		$quotes->sector = "salesMarketingQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b5(Request $req){
		return view('quotes.adminSupportQuotes');
	}
	public function b5support(Request $req){

        $quotes->sector = "adminSupportQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b6(Request $req){
		return view('quotes.customerServiceQuotes');
	}
	public function b6support(Request $req){
		$quotes = new quotes();

        $quotes->sector = "customerServiceQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b7(Request $req){
		return view('quotes.dataScienceAnalyticsQuotes');
	}
	public function b7support(Request $req){
		$quotes = new quotes();

        $quotes->sector = "dataScienceAnalyticsQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function b8(Request $req){
		return view('quotes.engineeringArchitectureQuotes');
	}
	public function b8support(Request $req){
		$quotes = new quotes();

        $quotes->sector = "engineeringArchitectureQuotes";
		$quotes->s1 = $req->s1;
        $quotes->s2 = $req->s2;
        $quotes->s3 = $req->s3;
        $quotes->fname = $req->fname;
        $quotes->lname = $req->lname;
        $quotes->email = $req->email;
        $quotes->save();

		return view('quotes.afterquotes');
	}

	public function webdev(Request $req){

		$freelancer = ["a b","mahmudul hasan b","hasan ali","shohag ahmed","abc","vc"];

		return view('home.webdev',['data'=>$freelancer]);
	}

	public function webdevsupport(Request $req)
	{
		return view('home.webdev');
	}

	
	public function livesearch(Request $request)
	{
		if($request->ajax())
    	{
	      	$output = '';
	      	$query = $request->get('query');
	      	if($query != '')
	      	{
		       	$data = freelancer::where('username', 'like', '%'.$query.'%')
					->orWhere('email', 'like', '%'.$query.'%')
					->orderBy('id', 'desc')
		        	->get();
	      	}
	      	else
	      	{
	       		$data =freelancer::orderBy('id', 'desc')
	         	->get();
      		}
      		$total_row = $data->count();
      		if($total_row > 0)
      		{
       			foreach($data as $row)
       			{
        			$output .= '
        				<tr>
							<td>'.$row->username.'</td>
							<td>'.$row->email.'</td>
							<td>'.$row->country.'</td>
							<td>'.$row->type.'</td>
							<td>'.$row->worktitle.'</td>
							<td>'.$row->workdetails.'</td>
							<td>'.$row->experience.'</td>
							<td>'.$row->title.'</td>
							<td>'.$row->titledetails.'</td>
							<td>'.$row->english.'</td>
							<td>'.$row->rate.'</td>
							<td>'.$row->hour.'</td>
        				</tr>
        			';
       			}
      		}
      		else
      		{
       			$output = '
    			<tr>
        			<td align="center" colspan="5">No Data Found</td>
       			</tr>
				';
			}
			$data = array(
				'table_data'  => $output,
				'total_data'  => $total_row
			);

			echo json_encode($data);
		}
	}
	public function livejobsearch(Request $request)
	{
		if($request->ajax())
    	{
	      	$output = '';
	      	$query = $request->get('query');
	      	if($query != '')
	      	{
		       	$data = job::where('title', 'like', '%'.$query.'%')
					->orWhere('client', 'like', '%'.$query.'%')
					->orderBy('id', 'desc')
		        	->get();
	      	}
	      	else
	      	{
	       		$data =job::orderBy('id', 'desc')
	         	->get();
      		}
      		$total_row = $data->count();
      		if($total_row > 0)
      		{
       			foreach($data as $row)
       			{
        			$output .= '
        				<tr>
							<td>'.$row->title.'</td>
							<td>'.$row->description.'</td>
							<td>'.$row->payment.'</td>
							<td>'.$row->completeday.'</td>
							<td>'.$row->status.'</td>
							<td>'.$row->client.'</td>
        				</tr>
        			';
       			}
      		}
      		else
      		{
       			$output = '
    			<tr>
        			<td align="center" colspan="5">No Data Found</td>
       			</tr>
				';
			}
			$data = array(
				'table_data'  => $output,
				'total_data'  => $total_row
			);

			echo json_encode($data);
		}
	}
	public function webdetails(Request $req)
	{
		$data = freelancer::where('title', 'web developer')->get();
		//echo $data;
		return view('home.webdev',['freelancer'=>$data]);
	}

	public function webreg(Request $req)
	{
		$req->session()->put('fname', $req->fname);
		$req->session()->put('lname', $req->lname);
		$req->session()->put('email', $req->email);
		return redirect()->route('registration.index2');
	}
	public function mobiledetails(Request $req)
	{
		$data = freelancer::where('title', 'mobile developer')->get();
		//echo $data;
		return view('home.mobiledev',['freelancer'=>$data]);
	}

	public function mobilereg(Request $req)
	{
		$req->session()->put('fname', $req->fname);
		$req->session()->put('lname', $req->lname);
		$req->session()->put('email', $req->email);
		return redirect()->route('registration.index2');
	}
}