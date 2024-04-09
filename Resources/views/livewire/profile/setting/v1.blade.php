<div class="p-6 space-y-6 bg-white lg:space-y-12 lg:p-12">
	<section class="flex items-center gap-6">
		<div class="grid w-20 h-20 bg-gray-200 rounded-full place-items-center">
			<x-heroicon-o-user class="w-8 h-8 text-gray-400"/>
		</div>
		<div>
			<h2 class="text-2xl">Davide</h2>
			<a class="flex items-center space-x-1 text-blue-500" href=""><span>Go to profile</span> <x-heroicon-o-chevron-right class="inline w-4 h-4"/></a>
		</div>
	</section>
	<section>
		<h6 class="text-xs text-gray-400 mb-2.5">PERSONAL INFO</h6>
		<hr>
		<ul>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">Update password</span>
					<x-heroicon-o-lock-closed class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">Change e-mail</span>
					<x-heroicon-o-lock-closed class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">Personal info</span>
					<x-heroicon-o-lock-closed class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
		</ul>
	</section>

	<section>
		<div class="flex justify-between">
			<h6 class="text-xs text-gray-400 mb-2.5">NOTIFICATIONS</h6>
			<div class="grid w-32 grid-cols-2">
				<h6 class="text-xs text-gray-400 mb-2.5 text-center">PUSH</h6>
				<h6 class="text-xs text-gray-400 mb-2.5 text-center">EMAIL</h6>
			</div>
		</div>
		<hr>
		<ul>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6">
					<div>
						<p class="text-sm font-bold">Market resolution</p>
						<small class="text-xs text-gray-400">on a market you've bet on</small>
					</div>
					<div class="grid w-32 grid-cols-2">
						<div class="text-center">
							<input type="checkbox" class="rounded" checked>
						</div>
						<div class="text-center">
							<input type="checkbox" class="rounded" checked>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6">
					<div>
						<p class="text-sm font-bold">Live Events</p>
					</div>
					<div class="grid w-32 grid-cols-2">
						<div class="text-center">
							<input type="checkbox" class="rounded" checked>
						</div>
						<div class="text-center">
							<input type="checkbox" class="rounded disabled:bg-gray-300 disabled:border-gray-300" disabled>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6">
					<div>
						<p class="text-sm font-bold">New Followers</p>
					</div>
					<div class="grid w-32 grid-cols-2">
						<div class="text-center">
							<input type="checkbox" class="rounded" checked>
						</div>
						<div class="text-center">
							<input type="checkbox" class="rounded">
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6">
					<div>
						<p class="text-sm font-bold">Comments</p>
						<small class="text-xs text-gray-400">on topics you are following</small>
					</div>
					<div class="grid w-32 grid-cols-2">
						<div class="text-center">
							<input type="checkbox" class="rounded disabled:bg-gray-300 disabled:border-gray-300" disabled>
						</div>
						<div class="text-center">
							<input type="checkbox" class="rounded" checked>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>

	<section>
		<h6 class="text-xs text-gray-400 mb-2.5">GENERAL INFO</h6>
		<hr>
		<ul>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6">
					<span class="text-sm font-bold">Language</span>
					<div>
						<select name="lang" class="font-bold text-blue-500 border-none rounded-none ring-0 focus:border-none focus:ring-0" id="">
							<option value="EN" selected>EN</option>
							<option value="ID">ID</option>
						</select>
					</div>
				</div>
			</li>
		</ul>
	</section>
	<section>
		<h6 class="text-xs text-gray-400 mb-2.5">FEEDBACK</h6>
		<hr>
		<ul>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<div>
						<p class="text-sm font-bold">F.A.Q.</p>
						<small class="text-xs text-gray-400">Knowledge Base</small>
					</div>
					<x-heroicon-o-chat-bubble-left-ellipsis class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">Contact Us</span>
					<x-heroicon-o-paper-airplane class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<div>
						<p class="text-sm font-bold">Report a Bug</p>
						<small class="text-xs text-gray-400">or give a general feedback</small>
					</div>
					<x-heroicon-o-bug-ant class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">About Futuur</span>
					<x-heroicon-o-academic-cap class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
		</ul>
	</section>

	<section>
		<h6 class="text-xs text-gray-400 mb-2.5">LEGAL</h6>
		<hr>
		<ul>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<div>
						<p class="text-sm font-bold">Privacy Policy</p>
						<small class="text-xs text-gray-400">legal@xot.io</small>
					</div>
					<x-heroicon-o-shield-exclamation class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">Terms of Use</span>
					<x-heroicon-o-document-text class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<div>
						<p class="text-sm font-bold">Report a Bug</p>
						<small class="text-xs text-gray-400">or give a general feedback</small>
					</div>
					<x-heroicon-o-bug-ant class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
			<li>
				<a class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<span class="text-sm font-bold">About Futuur</span>
					<x-heroicon-o-academic-cap class="w-6 h-6 text-blue-500"/>
				</a>
			</li>
		</ul>
	</section>

	<section>
		<h6 class="text-xs text-gray-400 mb-2.5">PUBLIC API</h6>
		<hr>
		<p class="font-bold mt-2.5 mb-5">API Key</p>
		<ul>
			<li>
				<div class="flex items-center justify-between py-2 space-x-6 transition-colors hover:text-blue-500" href="#">
					<div class="text-sm text-gray-400 shrink">
						Futuur’s public API is still in Beta. <a class="text-blue-500" href="#">Link to documentation</a>
					</div>
					<x-heroicon-o-key class="block w-6 h-6 text-blue-500"/>
				</div>
				<button class="px-8 py-4 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700">Enable API access</button>
			</li>
		</ul>
	</section>
</div>